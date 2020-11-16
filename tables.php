<div class="mains">

    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="header-title">
                Tables
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="">RVC Information</li>
                <li class="header-title">Tables</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">

                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header bg-teal">
                            <h3 class="box-title">Tables</h3>
                        </div>


                        <form action="" method="POST">

                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs color-grey">
                                    <li class="active" class="tablinks"><a href="#tab_a" data-toggle="tab"
                                            aria-expanded="true" class="color-teal">Home</a></li>
                                    <li>
                                        <div class="dropdown d-inline-block">
                                            <select name="" id="selectArea" class="color-teal" style="height: 40px; border:none;background-color:white;" >
                                                <option value="" disabled selected>Service Area</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="tablinks tablesNavbarButtons"><a href="#tab_c" data-toggle="tab"
                                            aria-expanded="false" class="color-dark"><button class="btn"
                                                disabled id="publish" class="tableUpdate">Update</button></a></li>
                                    <li class="tablinks"><a href="#tab_c" data-toggle="tab" aria-expanded="false"
                                            class="color-teal"><button type="button" class="btn tableSavePublish" id="submit">Save</button></a></li>
                                </ul>
                            </div>
                            <div class="row">

                                <div class="col-xs-3 tables-main">
                                    <div class="tables ml-2">
                                        <h6 class="mt-2"><u><strong>Tables</strong></u></h6>
                                        <div class="table-shapes">
                                            <div class="circle draggable"></div>
                                            <div class="rectangle draggable"></div>
                                            <div class="diamond draggable"></div>
                                        </div>

                                        <div class="barriers mt-4">
                                            <h6><u><strong>Barriers & Labels</strong> </u></h6>
                                            <div class="barrier-shape">
                                                <div class="barrier-bold mb-2 draggable"></div>
                                                <div class="barrier-hollow mb-2 draggable"></div>
                                                <div class="barrier_label draggable"><span>Label</span></div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xs-9 draw-area"> 

                                    <h3 class="draw-box" style='width:100%;height:100%; align-items:center;justify-content:center;text-align:center;top:50%;position:absolute;'>Choose a service area to start drawing.</h3>
                                </div>
                            </div>
                            <div class="updateIndex">
                                <div class="control selectIndex form-inline">
                                    <span>Change Table Number</span>
                                    <input type="text" size="4" class="indexInput">
                                </div>
                            </div>
                            
                            <!-- THIS IS FOR SIZING TABLES TO BE COMPLETED ON A LATER DATE -->
                            <!-- <div class="resizeable">
                                <div class="resize">
                                    <div class="control selectIndex">
                                        <span>Change Table Index</span>
                                        <input type="text" size="4" class="indexInput">

                                    </div> -->
                                    <!-- <div class='no-input text-danger'></div>
                                    <div class="control selectSize">
                                        <span>Size</span>
                                        <div class="btn-group">
                                            <button type="button" class="button increaseSize"><i class="fa fa-plus"></i></button>
                                            <button type="button" class="button decreaseSize"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="control selectWidth">
                                        <span>Width</span>
                                        <div class="btn-group">
                                            <button type="button" class="button increaseWidth"><i
                                                    class="fa fa-plus"></i></button>
                                            <button type="button" class="button decreaseWidth"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="control selectHeight">
                                        <span>Height</span>
                                        <div class="btn-group">
                                            <button type="button" class="button increaseHeight"><i
                                                    class="fa fa-plus"></i></button>
                                            <button type="button" class="button decreaseHeight"><i class="fa fa-minus"
                                                    aria-hidden="true"></i></button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
</div>


<script>     
$(document).ready(function () {


        // Get the numbet of all the items dropped in the diagram

        var droppedItem = [];
        var items = {}
        var existingItems = {}
        var canvas = $(".draw-area")
        var tableCol = $(".tables-main")
        var number = 0
        var width = 0
        var area = ""
        var rvc_id = ""
        var height = 0
        var itemIndex = $(".number")
        var dom
        // Function gets the service area from the select option
        $("#selectArea").change(function(){
            // var confimation = confirm("The changes will be lost! Save first before leaving!")
            canvas.empty()
            droppedItem = []
            var areaSelected = $("#selectArea option:selected").val()
            var rvc = $("#selectArea option:selected").data("rvc-id")
            area = areaSelected
            rvc_id = rvc
            var existingDataTable = []
            console.log(area)
            
            // GET service area if it already exists so as to not create another servce area tables using the same service area

            $.ajax({
                type:"GET",
                url:`/SOOP/index.php/api/tableservice/${area}`,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(data){
                    existingDataTable = [...data]
                    console.log(data)
                    if (!existingDataTable.length == 0){
                        populateExistingTables(existingDataTable)
                    } else{
                        // If there are not existing tables create a new table
                        // The existingDataTable passed as an argument its just to pass it to the dropTable() as an extra argument
                        createNewTables()
                    }
                }
            })
        })

        /* First check if there is any existing tables of a service area in the database
        by sending a request to fetch the data form the database belonging to a specific 
        table. If there is any data render the tables in the draw area is no tables create a new one */

        function populateExistingTables(existingDataTable){
            // Check if its a table already exists disable the save button and enable the update button
            $("#publish").prop("disabled", false).addClass("tableSavePublish")
            $("#submit").prop("disabled", true).removeClass("tableSavePublish")

            for (var i in existingDataTable){
                var item = existingDataTable[i]
                existingItems = {
                    id: item.TABLE_ID,
                    // Set the position of an object using the ui property
                    position_top:item.POSITION_TOP,
                    position_left:item.POSITION_LEFT,
                    width: item.WIDTH,
                    height: item.HEIGHT,
                    area_id:item.AREA_ID,
                    rvc_id:item.RVC_ID,
                    number:item.TABLE_NUMBER,
                    type:item.SHAPE,
                    // publish: false,
                }
                
                var html = ""
                if (item.SHAPE === "Circle"){
                    html = `<div class='hold-circle selectOption' id=${item.TABLE_ID} style='width:${item.WIDTH};height:${item.HEIGHT};position:absolute;top:${item.POSITION_TOP}px;left:${item.POSITION_LEFT}px;'><span class='itemIndex'>${item.TABLE_NUMBER}</span></div>`
                } else if (item.SHAPE === "Rectangle"){
                    html = `<div class='hold-rectangle selectOption' id=${item.TABLE_ID} style='width:${item.WIDTH};height:${item.HEIGHT};position:absolute;top:${item.POSITION_TOP}px;left:${item.POSITION_LEFT}px;'><span class='itemIndex'>${item.TABLE_NUMBER}</span></div>`
                }
                else if (item.SHAPE === "Diamond"){
                    html = `<div class='hold-diamond selectOption' id=${item.TABLE_ID} style='width:${item.WIDTH};height:${item.HEIGHT};position:absolute;top:${item.POSITION_TOP}px;left:${item.POSITION_LEFT}px;'><span class='itemDiamondIndex'>${item.TABLE_NUMBER}</span></div>`
                }
                else if (item.SHAPE === "Barrier Bold"){
                    html = `<div class='dropped_barrier_bold' id=${item.TABLE_ID} style='width:${item.WIDTH};height:${item.HEIGHT};position:absolute;top:${item.POSITION_TOP}px;left:${item.POSITION_LEFT}px;'></div>`
                }
                else if (item.SHAPE === "Barrier Hollow"){
                    html = `<div class='dropped_barrier_hollow' id=${item.TABLE_ID} style='width:${item.WIDTH};height:${item.HEIGHT};position:absolute;top:${item.POSITION_TOP}px;left:${item.POSITION_LEFT}px;'></div>`
                }
                else if (item.SHAPE === "Barrier Label"){
                    html = `<div class='dropped_label' id=${item.TABLE_ID} style='width:${item.WIDTH};height:${item.HEIGHT};position:absolute;top:${item.POSITION_TOP}px;left:${item.POSITION_LEFT}px;'><span>Label</span></div>`
                }

                //Push the existingItems objects to the droppedItem Array
                createItems(existingItems)
                // Change the index of saved tables from the database
                changeIndex(droppedItem)   

              
                // Make the dom elements draggable and update their positions
                dom = $(html).draggable({
                    stop: function (event, ui) {
                        // Get the id of the item using the helper property which is created by the attr() below
                        
                        var id = ui.helper.attr("id")
                        
                        for (var i in droppedItem) {
                            // Check for the item with the same id as the moved item
                            if (droppedItem[i].id == id) {
                                droppedItem[i].position_top = ui.position.top,
                                droppedItem[i].position_left = ui.position.left
                                    
                            }
                            // Remove the item from the list if it is dragged outside the draw area i.e the length goes to negative
                            if (droppedItem[i].position_left < 0.0) {

                                var remove = confirm("Delete Item");
                                if (remove == true) {
                                    $(`#${droppedItem[i].id}`).remove()
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
                            // This creates onclick events onthe Item i.e increase/decrease size,width, height when item is dragged inside the area
                          
                            changeIndex(droppedItem)   
                        }
                    }
                })

                canvas.append(dom)
                // The draw are turn it to droppable to ba able to drop items 
                canvas.droppable({
                    drop: function (event, ui) {
                        // Create an object to represent the properties of a dragged object
                        items = {
                            id: (new Date).getTime(),
                            // Set the position of an object using the ui property
                            position_top:ui.helper.position().top,
                            position_left:ui.helper.position().left,
                            width: width,
                            height: height,
                            area_id:area,
                            rvc_id:rvc_id,
                            // publish: false,
                        }

                        // THe position of the item drugged takes the width of the Tables column and adds it to the draw are width so we need to move it
                        items.position_left -= (canvas.position().left)
                        // Use the ui property from jqueryUI to get the value i.e the class of the node selected
                        if (ui.helper.hasClass('circle')) {
                            // add an item property 'TYPE' to the item object
                            items.type = "Circle"
                            items.number = 0
                        } else if (ui.helper.hasClass('rectangle')) {
                            // add an item property 'TYPE' to the item object
                            items.type = "Rectangle"
                            items.number = 0
                        } else if (ui.helper.hasClass('diamond')) {
                            // add an item property 'TYPE' to the item object
                            items.type = "Diamond"
                            items.number = 0
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
                        // This creates an array of all items created
                        createItems(items)
                        
                        // Create indexes for different teams excluding Barriers and Labels
                        createIndex(droppedItem)


                        // Render the item in the dropped area
                        dropTables(droppedItem, item)

                        // This function sets the width and the height of a dropped item                
                        renderDiagram(droppedItem)

                        // This creates onclick events onthe Item i.e increase/decrease size,width, height when item is dropped 
                        for (var i in droppedItem){
                            resizeImage(i, droppedItem[i].id)                   
                        }                        
                        // Prevent page reload before saving the changes
                        window.onbeforeunload = function(event){
                            return confirm("Confirm Refresh")
                        }
                        // Change the index of a table
                        
                        changeIndex(droppedItem)
                    }

                })
            }    
        }

        // Creates new tables if the Service Area is empty
        function createNewTables(){
            // Check if its a new table being created disable the update button and enable the save button
            $("#submit").prop("disabled", false).addClass("tableSavePublish")
            $("#publish").prop("disabled", true).removeClass("tableSavePublish")
            
            // The draw are turn it to droppable to ba able to drop items 
            canvas.droppable({
                drop: function (event, ui) {
                    // Create an object to represent the properties of a dragged object
                    items = {
                        id: (new Date).getTime(),
                        // Set the position of an object using the ui property
                        position_top:ui.helper.position().top,
                        position_left:ui.helper.position().left,
                        width: width,
                        height: height,
                        area_id:area,
                        rvc_id:rvc_id,
                        // publish: false,
                    }

                    // THe position of the item drugged takes the width of the Tables column and adds it to the draw are width so we need to move it
                    items.position_left -= (canvas.position().left)
                    // Use the ui property from jqueryUI to get the value i.e the class of the node selected
                    if (ui.helper.hasClass('circle')) {
                        // add an item property 'TYPE' to the item object
                        items.type = "Circle"
                        items.number = 0
                    } else if (ui.helper.hasClass('rectangle')) {
                        // add an item property 'TYPE' to the item object
                        items.type = "Rectangle"
                        items.number = 0
                    } else if (ui.helper.hasClass('diamond')) {
                        // add an item property 'TYPE' to the item object
                        items.type = "Diamond"
                        items.number = 0
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
                    // This creates an array of all items created
                    createItems(items)
                    
                    // Create indexes for different teams excluding Barriers and Labels
                    createIndex(droppedItem)
                    
                    // Render the item in the dropped area
                    dropTables(droppedItem, items)
                    
                    // This function sets the width and the height of a dropped item                
                    renderDiagram(droppedItem)

                    // This creates onclick events onthe Item i.e increase/decrease size,width, height when item is dropped 
                    // for (var i in droppedItem){
                    //     resizeImage(i, droppedItem[i].id)                   
                    // }
                    

                    // Prevent page reload before saving the changes
                    window.onbeforeunload = function(event){
                        return confirm("Confirm Refresh")
                    }

                    // // Change the index of a table
                    changeIndex(droppedItem)   


                }
            })
        }
/**--------------------------------------------------------------------------------- SETS ALL TABLES AS DRAGGABLE ----------------------------------- */
        // Set the elements to draggable

        $(".draggable").draggable({
            // Set the helper to clone such that it drugs on the copy of the item
            helper: "clone",
            // grid: [ 20, 20 ]

        });
        /* -------------------------------------------------------------------------THIS CODE/FUNCTIONS IS RESPONSIBLE FOR UPDATING THE NUMBER/INDEX --------------------------------------------------------------------------- */    
        function changeIndex(droppedItem){
            // console.log(droppedItem)
            var selectedItem
            var item
            for (var i in droppedItem){
                // selectedItem = document.getElementById(droppedItem[i].id)
                selectedItem= $(`#${droppedItem[i].id}`)
                item = droppedItem[i]
                updateSelectedIndex(selectedItem, item)
            }           
        }      
        function updateSelectedIndex(selectedItem, item){
            selectedItem.click(function(e){
                var selectedId = selectedItem.attr("id")
                if (selectedId = item.id){
                    console.log(item.type)
                    updateIndex(selectedId,item)
                }
            })
            
        }
        
        function updateIndex(selectedId,item){
            // var inputField = ""

            var newIndex;
            
            //var item = droppedItem[i]
            $(".updateIndex").show()
            $(".indexInput").val(item.number) //Set the value of the input field to value of the number

            $(".indexInput").unbind().keyup(function(){
                // console.log(e.target.id)
                newIndex = $(".indexInput").val()

               // console.log(item.number, newIndex)
                item.number = newIndex
                // console.log(item.number, newIndex)
                $(`#${selectedId} span`).text(newIndex)
                // $(this).unbind()
            })
        }
/*---------------------------------------------------------------------------------THIS createItems(items) function PUSHES ALL ITEMS TO THE droppedItem array---------------------------------------------------------------------- */

        // Push the item object to the droppedItem array
        function createItems(items){
            droppedItem.push(items)
            return droppedItem
        }
/**-------------------------------------------------------------------------------THIS dropTables() function HANDLES DROPPING TABLES TO THE CANVAS, DRAGGING THEM AND UPDATING THEIR POSITIONS WHEN DRAGGED----------------------------------------------------------- */
        // This function hundles the positioning of elemnts being dropped
        function dropTables(droppedItem, item){
            // Clear the canvas after every drop to prevent duplicating
            canvas.empty()
            
            // Loop through all the items 
            for (var i in droppedItem) {
                var item = droppedItem[i]
                // Add the item to the canvas/draw area
                var html = ""; 
              
                /*
                All the existing tables i.e pulled from the database, all their properties are returned as strings
                including the id while all the new tables i.e dropped/Updated id property are numbers. So we use the 
                difference in typeof() to get the existing which we give the properties from the databse and and all new tables
                we give custom/new properties
                */
                if (typeof(item.id) == "number"){
                    if (item.type === 'Circle') {
                        // html =  $(this).addClass("circle")
                        html = `<div class='hold-circle selectOption' style='width:40px;height:40px;'><span class='itemIndex'>${droppedItem[i].number}</span></div>`
                    } else if (item.type === 'Rectangle') {
                        html = `<div class='hold-rectangle selectOption' style='width:40px;height:40px;'><span class='itemIndex'>${droppedItem[i].number}</span></div>`
                    } else if (item.type === 'Diamond') {
                        html = `<div class='hold-diamond selectOption'style='width:20px;height:20px;' ><span class='itemDiamondIndex'>${droppedItem[i].number}</span></div>`
                    } else if (item.type === 'Barrier Bold') {
                        html = `<div class='dropped_barrier_bold' style='width:100px;height:20px;'></div>`
                    } else if (item.type === 'Barrier Hollow') {
                        html = `<div class='dropped_barrier_hollow' style='width:100px;height:25px;'></div>`
                    } else if (item.type === 'Barrier Label') {
                        html = `<div class='dropped_label' style='width:80px;height:25px;'><span>Label</span></div>`
                    }
                } else {
                    // Existing tables have id property as a number hence we pull all its properties from the database
                    if (item.type === 'Circle') {
                        // html =  $(this).addClass("circle")
                        html = `<div class='hold-circle selectOption' id=${item.id} style='width:${item.width};height:${item.height};position:absolute;top:${item.position_top}px;left:${item.position_left}px;'><span class='itemIndex'>${item.number}</span></div>`
                    } else if (item.type === 'Rectangle') {
                        html = `<div class='hold-rectangle selectOption' id=${item.id} style='width:${item.width};height:${item.height};position:absolute;top:${item.position_top}px;left:${item.position_left}px;'><span class='itemIndex'>${item.number}</span></div>`
                    } else if (item.type === 'Diamond') {
                        html = `<div class='hold-diamond selectOption' id=${item.id} style='width:${item.width};height:${item.height};position:absolute;top:${item.position_top}px;left:${item.position_left}px;'><span class='itemDiamondIndex'>${item.number}</span></div>`
                    } else if (item.type === 'Barrier Bold') {
                        html = `<div class='dropped_barrier_bold' id=${item.id} style='width:${item.width};height:${item.height};position:absolute;top:${item.position_top}px;left:${item.position_left}px;'></div>`
                    } else if (item.type === 'Barrier Hollow') {
                        html = `<div class='dropped_barrier_hollow' id=${item.id} style='width:${item.width};height:${item.height};position:absolute;top:${item.position_top}px;left:${item.position_left}px;'></div>`
                    } else if (item.type === 'Barrier Label') {
                        html = `<div class='dropped_label' id=${item.id} style='width:${item.width};height:${item.height};position:absolute;top:${item.position_top}px;left:${item.position_left}px;'><span>Label</span></div>`
                    }
              
                }

                // Convert the html to a dom object
                // set the css property of where to be dropped

                dom = $(html).css({
                    "position": "absolute",
                    "top": item.position_top,
                    "left": item.position_left

                }).attr("id", item.id)
                

                dom.draggable({
                    
                    //  // This attr() allows us to send the elemnt to the dom with an id of that particular item
                    // when dragging items inside the draw area we need to hundle it in such that it doesnt create a new item but updates it position from the one in the list
                    // to achieve that we need to use the stop jquery method to indicate when item is stoped moving

                    stop: function (event, ui) {
                        // Get the id of the item using the helper property which is created by the attr() below
                        
                        var id = ui.helper.attr("id")
                        
                        for (var i in droppedItem) {
                            // Check for the item with the same id as the moved item
                            if (droppedItem[i].id == id) {
                                droppedItem[i].position_top = ui.position.top,
                                    droppedItem[i].position_left = ui.position.left
                                    
                            }
                            // Remove the item from the list if it is dragged outside the draw area i.e the length goes to negative
                            if (droppedItem[i].position_left < 0.0 || droppedItem[i].position_top < 0.0) {

                                var remove = confirm("Delete Item");
                                if (remove == true) {
                                    $(`#${droppedItem[i].id}`).remove()
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

                            // This creates onclick events onthe Item i.e increase/decrease size,width, height when item is dragged inside the area
                            resizeImage(i, id)
                        }

                        changeIndex(droppedItem)   
                        
                    }
                })
                // Send the item in the draw area
                canvas.append(dom)
            }
            
        }
/**---------------------------------------------------------------------------------THIS EVENT HUNDLER SUBMITS TABLES TO THE DATABASE ----------------------------------- */
        // Submiting/Saving the tables tot the database
        var submit = document.getElementById("submit")
        submit.addEventListener("click", function(e){
            // e.preventDefault()

            $.ajax({

                type:"POST",
                url:"/SOOP/index.php/api/tableservice",
                data: JSON.stringify(droppedItem),
                cache:false,
                processData:false,
                contentType: false,
                success: function(data){
                    console.log("this data is sent to database", data)
                    $("#publish").prop("disabled", false).addClass("tableSavePublish")
                    droppedItem = []
                },
                error: function(){
                    Swal.fire(
                        'Something went wrong!',
                        'Failed to save!',
                        'error'
                        )
                }
            })
        })
/**---------------------------------------------------------------------------------THIS EVENT HUNDLER UPDATING TABLES TO THE DATABASE ----------------------------------- */
        // Publishing/updating the tables to the database
        var update = document.getElementById("publish")
        update.addEventListener("click", function(e){
            $.ajax({
                type:"POST",
                url: "/SOOP/index.php/api/tableserviceupdate",
                data: JSON.stringify(droppedItem),
                cache:false,
                processData:false,
                contentType: false,
                success: function(data){
                    console.log("this data is sent to database", data)
                    droppedItem = []
                },
                error: function(){
                    Swal.fire(
                        'Something went wrong!',
                        'Failed to save!',
                        'error'
                        )
                }
            })
        })
/**---------------------------------------------------------------------------------THIS GIVES DEFAULT WIDTH AND HEIGHT TO THE DROPPED ITEM--------- ----------------------------------- */
        // This function sets the width and the height of a dropped item
        function renderDiagram(droppedItem){
            for (var i in droppedItem){
                var id = droppedItem[i].id
                var droppedElement = document.getElementById(id)
                var itemWidth = droppedElement.style.width
                var itemHeight = droppedElement.style.height  
                // Apply only to the last array to avoid conflicting with the already existing data
                var lastItem = droppedItem.slice(-1)
                // console.log(droppedItem.slice(0, -1))
                
                if (droppedItem.includes(lastItem[0])== true){
                    lastItem[0].width = itemWidth
                    lastItem[0].height = itemHeight
                    // droppedElement.style.width = lastItem[0].width
                    // droppedElement.style.height = lastItem[0].height
                }   
            }
        }
/**---------------------------------------------------------------------------------THIS createIndex GIVES EVERY SINGLE DROPPED TABLE A SPECIFIC INDEX/NUMBER EVEN AFTER IT HAS BEEN DELETED ITS UPDATES THE NUMBERING ----------------------------------- */
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
                    }else{
                        // If the item is a barrier or label set it to an empty string
                        droppedItem[i].number = ""
                    }
                }
            }
/**---------------------------------------------------------------------------------THIS resizeImage() RESIZES THE DROPPED TABLES TO DESIRED SHAPE AND SIZE. ALTOUGH NOT YES COMPLETED/IMPLEMENTED ----------------------------------- */
        // This function resizes images to different sizes
        function resizeImage(i, id) {
            // if (!id == undefined){
            $(`#${droppedItem[i].id}`).on('click', function (e) {
                // e.preventDefault()
                // Display the change input textbox only when the item is a CIRCLE/RECTANGLE/DIAMOND
                if (droppedItem[i].type=== "Circle" || droppedItem[i].type === "Rectangle" || droppedItem[i].type === "Diamond"){
                    $('.resize').toggle()
                    $(".indexInput").show()
                } else{
                    $(".indexInput").hide()
                    $('.resize').toggle()
                }

                // $('.resize').toggle()
                var itemIndex = droppedItem[i].number
                var elementWidth = this.getBoundingClientRect().width
                var elementHeight = this.getBoundingClientRect().height
                var elementId = $(`#${droppedItem[i].id}`)
                var element = document.getElementById(droppedItem[i].id)
                // console.log(element)
                $(".indexInput").val(itemIndex)

                // Edit the number/index of the item
                $(".indexInput").keyup(function(e){
                    var newIndex = $(".indexInput").val()
                    var itemIndex = $(".itemIndex")
                    var itemDiamondIndex = $(".itemDiamondIndex")
                    console.log(newIndex)
                    // itemIndex.innerHTML = "trial"
                    // console.log(itemDiamondIndex)
                    // Set the number of the item to the new typed index
                    droppedItem[i].number = newIndex
                })

                

                // increase and decrease the size of the image i.e both width and height in the same button
                $(".increaseSize").on("click", function(){
                    var clientWidth = element.clientWidth
                    var clientHeight = element.clientHeight
                    if (clientHeight >= 100 && clientWidth >= 100){
                        element.style.width = clientWidth + 0 + "px"; 
                        element.style.height = clientHeight + 0 + "px"
                        // element.style.width = elementWidth + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].width = element.style.width
                            element.style.width = droppedItem[i].width

                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                    } else {
                        element.style.width = clientWidth + 10 + "px"; 
                        element.style.height = clientHeight + 10 + "px"
                        // element.style.width = elementWidth + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].width = element.style.width
                            element.style.width = droppedItem[i].width

                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                    }

                })

                $(".decreaseSize").on("click", function(){
                    var clientWidth = element.clientWidth
                    var clientHeight = element.clientHeight
                    if (clientHeight <= 40 && clientWidth <= 40){
                        element.style.width = clientWidth - 0 + "px"; 
                        element.style.height = clientHeight - 0 + "px"
                        // element.style.width = elementWidth + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].width = element.style.width
                            element.style.width = droppedItem[i].width

                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                    } else {
                        element.style.width = clientWidth - 10 + "px"; 
                        element.style.height = clientHeight - 10 + "px"
                        // element.style.width = elementWidth + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].width = element.style.width
                            element.style.width = droppedItem[i].width

                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                    }
                })


                // Increase the width of the selected item
                $(".increaseWidth").on("click", function () {
                    // get the width of that element

                    var currWidth = element.clientWidth
                    
                    if (currWidth >= 100) {
                        element.style.width = currWidth + 0 + "px";
                        // element.style.width = elementWidth + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].width = element.style.width
                            element.style.width = droppedItem[i].width
                        }
                        
                    } else {
                        element.style.width = (currWidth + 15) + "px";
                        if (droppedItem[i].id == id){
                            droppedItem[i].width = element.style.width
                            element.style.width = droppedItem[i].width
                        }
                                                        
                    }
                
                })
                $(".decreaseWidth").on("click", function () {

                    // get the width of that element
                    var currWidth = element.clientWidth

                    if (currWidth <= 40) {
                        element.style.width = currWidth - 0 + "px";
                        // element.style.width = elementWidth + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].width= element.style.width
                            element.style.width = droppedItem[i].width
                        }
                        
                    } else {
                        element.style.width = (currWidth - 15) + "px";
                        // element.style.width = (elementWidth + 25)
                        if (droppedItem[i].id == id){
                            droppedItem[i].width = element.style.width
                            element.style.width = droppedItem[i].width
                        }
                                                        
                    }
                })

                $(".increaseHeight").on("click", function () {
                    var currHeight = element.clientHeight
                    if (currHeight >= 100) {
                        element.style.height = currHeight + 0 + "px";
                        // element.style.height = elementheight + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                        
                    } else {
                        element.style.height = (currHeight + 15) + "px";
                        // element.style.height = (elementheight + 25)
                        if (droppedItem[i].id == id){
                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                                                        
                    }
                })

                $(".decreaseHeight").on("click", function () {
                    var currHeight = element.clientHeight
                    if (currHeight <= 40) {
                        element.style.height = currHeight - 0 + "px";
                        // element.style.height = elementheight + 0 ;
                        if (droppedItem[i].id == id){
                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                        
                    } else {
                        element.style.height = (currHeight - 15) + "px";
                        // element.style.height = (elementheight + 25)
                        if (droppedItem[i].id == id){
                            droppedItem[i].height = element.style.height
                            element.style.height = droppedItem[i].height
                        }
                                                        
                    }
                })

            })
            // }

        }

/**---------------------------------------------------------------------------------PREVENTS RELOADING OF PAGES BY PRESSING F5 TO PREVENT LOSS OF DATA ----------------------------------- */
    function disableF5(e) {
        if ((e.which || e.keyCode) == 116) 
        e.preventDefault(); 
        };
    $(document).on("keydown", disableF5);

/**---------------------------------------------------------------------------------GETS ALL SERVICE AREAs FROM THE RVC AREA ----------------------------------- */
    // Get the Service Area created in the serviceArea.php file which is needed to allocate each table to Service ara assigned
    var selectOption = $("#selectArea")
    $.ajax({
        type: 'GET',
        url:"/SOOP/index.php/api/servicearea",
        success: function(data){
            $.each(data, function(index, area){
                selectOption.append(`<option data-rvc-id="${area.RVC_ID}" value=${area.AREA_ID} class="options">${area.AREA_NAME}</option>`)
            })
        }
    })
})
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
