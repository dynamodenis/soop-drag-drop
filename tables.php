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

              <nav class="tables-navbar">
                <ul class="tables-navbar-ul">
                  <li class="tables-home"><a href="#">Home</a></li>
                  <li class="tables-servicearea">Service Area</li>
                  <li class="tables-addServiceArea right"><i class="fa fa-plus">Add Service Area</i></li>
                  <li><button class="tables-publish btn btn-sm" disabled>Publish</button></li>
                  <li><button class="save right btn btn-sm bg-primary"><span class="save-text">Save</span></button></li>
                </ul>
              </nav>
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

                      <div class="draw-box"></div>
                  
                  </div>
              </div>
              <div class="resizeable">
                  <div class="resize">
                      <div class="control selectIndex">
                          <span>#</span>
                          <input type="text" size="4" class="indexInput">
                      </div>
                      <div class="control selectSize">
                          <span>Size</span>
                          <div class="btn-group">
                              <button type="button" class="button"><i class="fa fa-plus"></i></button>
                              <button type="button" class="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                          </div>
                      </div>
                      <div class="control selectWidth">
                          <span>Width</span>
                          <div class="btn-group">
                              <button type="button" class="button"><i class="fa fa-plus"></i></button>
                              <button type="button" class="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                          </div>
                      </div>
                      <div class="control selectHeight">
                          <span>Height</span>
                          <div class="btn-group">
                              <button type="button" class="button"><i class="fa fa-plus"></i></button>
                              <button type="button" class="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                          </div>
                      </div>
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

    // Get the numbet of all the items dropped in the diagram
    var droppedItem = [];
    var canvas = $(".draw-area")
    var tableCol = $(".tables-main")
    var number = 0
    var itemIndex = $(".number")
    // Set the elements to draggable
    $(".draggable").draggable({
        // Set the helper to clone such that it drugs on the copy of the item
        helper: "clone",
        // grid: [ 20, 20 ]

    });

    // The draw are turn it to droppable to ba able to drop items 
    canvas.droppable({
        drop: function(event, ui){
            // Create an object to represent the properties of a dragged object
            var items = {
                _id:(new Date).getTime(),
                // Set the position of an object using the ui property
                position:ui.helper.position(),
                number:number
            }
            
            // THe position of the item drugged takes the width of the Tables column and adds it to the draw are width so we need to move it
            items.position.left -= (canvas.position().left )
            
            // Use the ui property from jqueryUI to get the value i.e the class of the node selected
            if (ui.helper.hasClass('circle')){
                // add an item property 'TYPE' to the item object
                items.type = "Circle"
            } else if (ui.helper.hasClass('rectangle')){
                // add an item property 'TYPE' to the item object
                items.type = "Rectangle"
            } else if (ui.helper.hasClass('diamond')){
                // add an item property 'TYPE' to the item object
                items.type = "Diamond"
            } else if (ui.helper.hasClass('barrier-bold')){
                // add an item property 'TYPE' to the item object
                items.type = "Barrier Bold"
            } else if (ui.helper.hasClass('barrier-hollow')){
                // add an item property 'TYPE' to the item object
                items.type = "Barrier Hollow"
            } else if (ui.helper.hasClass('barrier_label')){
                // add an item property 'TYPE' to the item object
                items.type = "Barrier Label"
            } else {
                return;
            }

            // Push the item object to the droppedItem
            droppedItem.push(items)
            // console.log(droppedItem)
           // Render the item in the dropped area
            renderItem(droppedItem)
            // Creates a risizing for the items selected
            $(`#${items._id}`).on('click',function(){
                $(".resize").toggle()
                // $(".indexInput").val()=number
                console.log($(".indexInput").val())
            })
        }
    })

    // This function draws the item on the dropped area
    function renderItem(droppedItem){
        canvas.empty()
        // Loop through all the items 
        for (var i in droppedItem){
            var item = droppedItem[i]
            
            // Set the number property in the item to the number in the array 
            droppedItem[i].number = parseInt(i)+1
            
            // Add the item to the canvas/draw area
            var html = "";
            if (item.type === 'Circle'){
                // html =  $(this).addClass("circle")
                html =  `<div class='hold-circle'><span class='itemIndex'>${droppedItem[i].number}</span></div>`
            } else if (item.type === 'Rectangle'){
                html =  `<div class='hold-rectangle'><span class='itemIndex'>${droppedItem[i].number}</span></div>`
            } else if (item.type === 'Diamond'){
                html =  `<div class='hold-diamond'><span class='itemDiamondIndex'>${droppedItem[i].number}</span></div>`
            } else if (item.type === 'Barrier Bold'){
                html =  `<div class='dropped_barrier_bold'></div>`
            } else if (item.type === 'Barrier Hollow'){
                html =  `<div class='dropped_barrier_hollow'></div>`
            } else if (item.type === 'Barrier Label'){
                html = `<div class='dropped_label'><span>Label</span></div>`
            } 


            // Convert the html to a dom object
            // set the css property of where to be dropped
            
            var dom = $(html).css({
                "position":"absolute",
                "top":item.position.top,
                "left":item.position.left
            }).draggable({
                // when dragging items inside the draw area we need to hundle it in such that it doesnt create a new item but updates it position from the one in the list
                // to achieve that we need to use the stop jquery method to indicate when item is stoped moving

                stop: function(event, ui){
                    // Get the id of the item using the helper property which is created by the attr() below
                    var id = ui.helper.attr("id")
                    
                    for ( var i in droppedItem){
                        // Check for the item with the same id as the moved item
                        if (droppedItem[i]._id == id){
                            droppedItem[i].position.top = ui.position.top,
                            droppedItem[i].position.left = ui.position.left
                        }
                        // Remove the item from the list if it is dragged outside the draw area i.e the length goes to negative
                        if (droppedItem[i].position.left < 0.0){
                        
                            var remove = confirm("Delete Item");
                            if (remove == true){
                                $(`#${droppedItem[i]._id}`).remove()
                                droppedItem.splice(i,1)
                                console.log(droppedItem)
                            }
                            else{
                                console.log("Do not Delete")
                            }

                        }

                        
                        
                    }
                }
            }).attr("id", item._id)  // This attr() allows us to send the elemnt to the dom with an id of that particular item
           

            // html.draggable()
            canvas.append(dom)
            // console.log(item)
            
        }
        
    }



</script>

<script>
// function allowDrop(ev) {
//   ev.preventDefault();
// }

// function drag(ev) {
//   var style = window.getComputedStyle(event.target, null);
//   ev.dataTransfer.setData("Text", ev.target.id);
// }

// // DUPLICATE BEFORE DROPPIG SHAPE INTO THE DRAGGABLE AREA
// function drop(ev) {
//   ev.preventDefault();
  
//   var id = ev.dataTransfer.getData("text");
//   if (id == "drag1" && ev.target.id == "drag-section") {
//     var shape = document.getElementById(id);
    
//     var nodeCopy = shape.cloneNode(true);
//     //adding classname to the shapes
//     nodeCopy.classList.add("shapes");
//     //adding an incrementing id to the shapes
//     nodeCopy.id = incrementId();
//     function incrementId() {
//       if (!this.latestId) this.latestId = 1;
//       else this.latestId++;
//       return this.latestId;
//     }
//     ev.target.appendChild(nodeCopy);
//   }

//   if (id == "drag2" && ev.target.id == "drag-section") {
//     var shape = document.getElementById(id);
    
//     var nodeCopy = shape.cloneNode(true);
//     //adding classname to the shapes
//     nodeCopy.classList.add("shapes");
//     //adding an incrementing id to the shapes
//     nodeCopy.id = incrementId();
//     function incrementId() {
//       if (!this.latestId) this.latestId = 1;
//       else this.latestId++;
//       return this.latestId;
//     }
//     ev.target.appendChild(nodeCopy);
//   }

//   if (id == "drag3" && ev.target.id == "drag-section") {
//     var shape = document.getElementById(id);
    
//     var nodeCopy = shape.cloneNode(true);
//     //adding classname to the shapes
//     nodeCopy.classList.add("shapes");
//     //adding an incrementing id to the shapes
//     nodeCopy.id = incrementId();
//     function incrementId() {
//       if (!this.latestId) this.latestId = 1;
//       else this.latestId++;
//       return this.latestId;
//     }
//     ev.target.appendChild(nodeCopy);
//   }

//   if (id == "drag4" && ev.target.id == "drag-section") {
//     var shape = document.getElementById(id);
    
//     var nodeCopy = shape.cloneNode(true);
//     //adding classname to the shapes
//     nodeCopy.classList.add("shapes");
//     //adding an incrementing id to the shapes
//     nodeCopy.id = incrementId();
//     function incrementId() {
//       if (!this.latestId) this.latestId = 1;
//       else this.latestId = latestId;
//       return this.latestId;
//     }
//     ev.target.appendChild(nodeCopy);
//   }

//   if (id == "drag5" && ev.target.id == "drag-section") {
//     var shape = document.getElementById(id);
    
//     var nodeCopy = shape.cloneNode(true);
//     //adding classname to the shapes
//     nodeCopy.classList.add("shapes");
//     //adding an incrementing id to the shapes
//     nodeCopy.id = incrementId();
//     function incrementId() {
//       if (!this.latestId) this.latestId = 1;
//       else this.latestId = latestId;
//       return this.latestId;
//     }
//     ev.target.appendChild(nodeCopy);
//   }

//   if (id == "drag6" && ev.target.id == "drag-section") {
//     var shape = document.getElementById(id);
    
//     var nodeCopy = shape.cloneNode(true);
//     //adding classname to the shapes
//     nodeCopy.classList.add("shapes");
//     //adding an incrementing id to the shapes
//     nodeCopy.id = incrementId();
//     function incrementId() {
//       if (!this.latestId) this.latestId = 1;
//       else this.latestId++;
//       return this.latestId;
//     }
//     ev.target.appendChild(nodeCopy);
//   }

//   var id = document.getElementById(latestId).id;
//   //display id on shape
//   document.getElementById(latestId).innerHTML = id;

//   var value = document.getElementById(latestId).id;
//   //display table id on input field when a shape is dropped
//   document.getElementById("table-input").value = value;
  // $('div.shapes').click(function(){
  //     // if it's unmarked we mark
  //     if(!$(this).hasClass('selected'))
  //           $(this).addClass('selected').attr('selected', 'selected');
  //     else
  //           $(this).removeClass('selected').removeAttr('selected', 'selected');
  //   });
  // $.event.special.inputchange = {
  //     setup: function() {
  //       var self = this, val;
  //       $.data(this, 'timer', window.setInterval(function() {
  //           val = self.value;
  //           if ( $.data( self, 'cache') != val ) {
  //               $.data( self, 'cache', val );
  //               $( self ).trigger( 'inputchange' );
  //           }
  //       }));
  //     }
  //   };

  //   $('input').on('inputchange', function() {
  //       $('text').text(this.value);
  //   });

  //   const selectable = new Selectable({
  //     filter: ".shapes",
  //     appendTo: "#drag-section",
  //     lasso : false
  //   });

  //   // selectable.on("selecteditem", function(item) {
  //   // // do something when an item is selected
  //   //   // alert(latestId);
  //   //   console.log(item.node.id);
  //   // });

  //   selectable.on("end", function(e, selected, unselected) {
      
  //     document.getElementsByClassName("ui-selected")[0].setAttribute("selected", "selected");
  //     console.log(selected[0])
  //   });
    
  //   document
  //     .getElementById("zoomin")
  //     .addEventListener("click", function () {
  //       document.getElementById(latestId);
  //       increaseheight();
  //       increasewidth();
  //     });

  //   document
  //     .getElementById("zoomout")
  //     .addEventListener("click", function () {
  //       document.getElementById(latestId);
  //       decreaseheight();
  //       decreasewidth();
  //     });
  //   }

  //   function removeShape(ev) {
  //     ev.preventDefault();
  //     var data = ev.dataTransfer.getData("Text");
  //     var del = confirm(
  //       "You are about to DELETE this insert. Do you wish to continue?"
  //     );

  //     if (del) {
  //       var el = document.getElementById(data);
  //       el.parentNode.removeChild(el);

  //       console.log("item deleted");
  //     }
  //   }

  //   function increasewidth(){
  //       var myImg = document.getElementById(latestId);
  //       var currWidth = myImg.clientWidth;
  //       if (currWidth == 500) {
  //         myImg.style.width = currWidth + 0 + "px";
  //       } else {
  //           myImg.style.width = (currWidth + 25) + "px";
  //       } 
  //     }
      
  //     function decreasewidth(){
  //       var myImg = document.getElementById(latestId);
  //       var currWidth = myImg.clientWidth;
  //       if (currWidth == 50) {
  //         myImg.style.width = currWidth - 0 + "px";
  //       } else {
  //           myImg.style.width = (currWidth - 25) + "px";
  //       }
  //     }
  
  //     function increaseheight() {
  //       var myImg = document.getElementById(latestId);
  //       var currHeight = myImg.clientHeight;
  //       if (currHeight == 500) {
  //         myImg.style.height = currHeight + 0 + "px";
  //       } else {
  //           myImg.style.height = (currHeight + 25) + "px";
  //       } 
  //     }
  
  //     function decreaseheight() {
  //       var myImg = document.getElementById(latestId);
  //       var currHeight = myImg.clientHeight;
  //       if (currHeight == 50) {
  //         myImg.style.height = currHeight - 0 + "px";
  //       } else {
  //         myImg.style.height = currHeight - 25 + "px";
  //       }
  //     }
</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/selectable.js@latest/selectable.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>