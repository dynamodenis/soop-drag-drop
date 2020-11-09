$(document).ready(function(){

        // Get the numbet of all the items dropped in the diagram

        var droppedItem = [];
        var canvas = $(".draw-area")
        var tableCol = $(".tables-main")
        var number = 0
        var width = 0
        var height = 0
        var itemIndex = $(".number")
        var dom
        // Set the elements to draggable

        $(".draggable").draggable({
            // Set the helper to clone such that it drugs on the copy of the item
            helper: "clone",
            // grid: [ 20, 20 ]

        });


        // The draw are turn it to droppable to ba able to drop items 
        canvas.droppable({
            drop: function (event, ui) {
                // Create an object to represent the properties of a dragged object
                var items = {
                    _id: (new Date).getTime(),
                    // Set the position of an object using the ui property
                    position: ui.helper.position(),
                    number: number,
                    width: width,
                    height: height,
                }

                // THe position of the item drugged takes the width of the Tables column and adds it to the draw are width so we need to move it
                items.position.left -= (canvas.position().left)
                
                // Use the ui property from jqueryUI to get the value i.e the class of the node selected
                if (ui.helper.hasClass('circle')) {
                    // add an item property 'TYPE' to the item object
                    items.type = "Circle"
                } else if (ui.helper.hasClass('rectangle')) {
                    // add an item property 'TYPE' to the item object
                    items.type = "Rectangle"
                } else if (ui.helper.hasClass('diamond')) {
                    // add an item property 'TYPE' to the item object
                    items.type = "Diamond"
                } else if (ui.helper.hasClass('barrier-bold')) {
                    // add an item property 'TYPE' to the item object
                    items.type = "Barrier Bold"
                } else if (ui.helper.hasClass('barrier-hollow')) {
                    // add an item property 'TYPE' to the item object
                    items.type = "Barrier Hollow"
                } else if (ui.helper.hasClass('barrier_label')) {
                    // add an item property 'TYPE' to the item object
                    items.type = "Barrier Label"
                } else {
                    return;
                }

                // Push the item object to the droppedItem
                droppedItem.push(items)
                
                // Create indexes for different teams excluding Barriers and Labels
                createIndex(droppedItem)


                // Render the item in the dropped area
                canvas.empty()

                
                // Loop through all the items 
                for (var i in droppedItem) {
                    var item = droppedItem[i]

                    // Set the number property in the item to the number in the array 
                    // droppedItem[i].number = parseInt(i) + 1

                    // Add the item to the canvas/draw area
                    var html = "";
                    if (item.type === 'Circle') {
                        // html =  $(this).addClass("circle")
                        html = `<div class='hold-circle' style='width:40px;height:40px;'><span class='itemIndex'>${droppedItem[i].number}</span></div>`
                    } else if (item.type === 'Rectangle') {
                        html = `<div class='hold-rectangle' style='width:40px;height:40px;'><span class='itemIndex'>${droppedItem[i].number}</span></div>`
                    } else if (item.type === 'Diamond') {
                        html = `<div class='hold-diamond'style='width:20px;height:20px;' ><span class='itemDiamondIndex'>${droppedItem[i].number}</span></div>`
                    } else if (item.type === 'Barrier Bold') {
                        html = `<div class='dropped_barrier_bold' style='width:100px;height:10px;'></div>`
                    } else if (item.type === 'Barrier Hollow') {
                        html = `<div class='dropped_barrier_hollow' style='width:100px;height:25px;'></div>`
                    } else if (item.type === 'Barrier Label') {
                        html = `<div class='dropped_label' style='width:80px;height:25px;'><span>Label</span></div>`
                    }
                    
                    
                    
                    // Convert the html to a dom object
                    // set the css property of where to be dropped

                    dom = $(html).css({
                        "position": "absolute",
                        "top": item.position.top,
                        "left": item.position.left

                    }).attr("id", item._id)
                    

                    dom.draggable({
                        
                        //  // This attr() allows us to send the elemnt to the dom with an id of that particular item
                        // when dragging items inside the draw area we need to hundle it in such that it doesnt create a new item but updates it position from the one in the list
                        // to achieve that we need to use the stop jquery method to indicate when item is stoped moving

                        stop: function (event, ui) {
                            // Get the id of the item using the helper property which is created by the attr() below
                            
                            var id = ui.helper.attr("id")
                            
                            for (var i in droppedItem) {
                                // Check for the item with the same id as the moved item
                                if (droppedItem[i]._id == id) {
                                    droppedItem[i].position.top = ui.position.top,
                                        droppedItem[i].position.left = ui.position.left
                                        
                                }
                                // Remove the item from the list if it is dragged outside the draw area i.e the length goes to negative
                                if (droppedItem[i].position.left < 0.0) {

                                    var remove = confirm("Delete Item");
                                    if (remove == true) {
                                        $(`#${droppedItem[i]._id}`).remove()
                                        droppedItem.splice(i, 1) // Deletes the item selected
                                        
                                        // Get the items left behind after the item has been deleted 
                                        // Only the items left behind after the deleted item i.e from that specified item onwards/afterwards
                                        var newArray = droppedItem.slice(i) 
                                        newArray.forEach(function(i){
                                            var newNumber = i.number -=1
                                            i.number = newNumber
                                            
                                        })                                      
                                    }
                                    else {
                                        console.log("Do not Delete")
                                    }

                                }

                                // Select different items for editing
                                resizeImage(i, id)

                            }
                        }
                    })
                    // html.draggable()
                    canvas.append(dom)
                 

                }

                // This function resizes images to different sizes
                function resizeImage(i, id) {
                    $(`#${droppedItem[i]._id}`).on('click', function (e) {
                        $('.resize').toggle()
                        var itemIndex = droppedItem[i].number
                        $(".indexInput").val(itemIndex)
                        var elementWidth = this.getBoundingClientRect().width
                        var elementHeight = this.getBoundingClientRect().height
                        var elementId = $(`#${droppedItem[i]._id}`)
                        var element = document.getElementById(droppedItem[i]._id)
                        $(".increaseWidth").on("click", function () {
                            // get the width of that element

                            var currWidth = element.clientWidth
                            if (currWidth >= 300) {
                                element.style.width = currWidth + 0 + "px";
                                // element.style.width = elementWidth + 0 ;
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].width = element.style.width
                                    element.style.width = droppedItem[i].width
                                }
                                
                            } else {
                                element.style.width = (currWidth + 25) + "px";
                                // element.style.width = (elementWidth + 25)
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].width = element.style.width
                                    element.style.width = droppedItem[i].width
                                }
                                                                
                            }
                     

                        })
                        $(".decreaseWidth").on("click", function () {

                            // get the width of that element
                            var currWidth = element.clientWidth

                            if (currWidth >= 300) {
                                element.style.width = currWidth - 0 + "px";
                                // element.style.width = elementWidth + 0 ;
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].width= element.style.width
                                    element.style.width = droppedItem[i].width
                                }
                                
                            } else {
                                element.style.width = (currWidth - 25) + "px";
                                // element.style.width = (elementWidth + 25)
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].width = element.style.width
                                    element.style.width = droppedItem[i].width
                                }
                                                                
                            }
                        })

                        $(".increaseHeight").on("click", function () {
                            var currHeight = element.clientHeight
                            if (currHeight >= 300) {
                                element.style.height = currHeight + 0 + "px";
                                // element.style.height = elementheight + 0 ;
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].height = element.style.height
                                    element.style.height = droppedItem[i].height
                                }
                                
                            } else {
                                element.style.height = (currHeight + 25) + "px";
                                // element.style.height = (elementheight + 25)
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].height = element.style.height
                                    element.style.height = droppedItem[i].height
                                }
                                                                
                            }
                        })

                        $(".decreaseHeight").on("click", function () {
                            var currHeight = element.clientHeight
                            if (currHeight >= 300) {
                                element.style.height = currHeight - 0 + "px";
                                // element.style.height = elementheight + 0 ;
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].height = element.style.height
                                    element.style.height = droppedItem[i].height
                                }
                                
                            } else {
                                element.style.height = (currHeight - 25) + "px";
                                // element.style.height = (elementheight + 25)
                                if (droppedItem[i]._id == id){
                                    droppedItem[i].height = element.style.height
                                    element.style.height = droppedItem[i].height
                                }
                                                                
                            }
                        })

                    })

                }

                // This function sets the width and the height of a dropped item
                
                
                renderDiagram(droppedItem)
                
                console.log(droppedItem)
            }

        })

        // This function sets the width and the height of a dropped item
        function renderDiagram(droppedItem){
            for (var i in droppedItem){
                var id = droppedItem[i]._id
                var droppedElement = document.getElementById(id)
                var itemWidth = droppedElement.style.width
                var itemHeight = droppedElement.style.height

                if (droppedItem[i]._id == id) {
                    droppedItem[i].width = itemWidth,
                    droppedItem[i].height = itemHeight
                        
                }
                // console.log(itemWidth, itemHeight)
            }
        }

        // NUmbering the items 
        function createIndex(droppedItems){
                for (var i in droppedItems){
                    // Set the number property in the item to the number in the array
                    if ( droppedItem[i].type === "Circle" || droppedItem[i].type === "Rectangle" || droppedItem[i].type === "Diamond") {
                        if ( droppedItem.length == 1){
                            droppedItem[i].number = 1
                        } else if (droppedItem.length > 1){
                            // Get the last added element and add to it one
                            var lastNumber = droppedItem.slice(-1)
                            lastNumber[0].number += 1                                                                
                        }
                        
                    }
                }
            }
    
})