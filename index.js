var circle = document.querySelector('.circle')
var rectangle = document.querySelector('.rectangle')
var diamond = document.querySelector(".diamond")
var drawBox = document.querySelector(".draw-box")
// Get all the empty boxes
var drawBox = document.querySelectorAll(".draw-box")

for (const box of drawBox){
    box.addEventListener('dragenter', dragEnter)
    box.addEventListener('dragover', dragOver)
    box.addEventListener('drop', dragDrop)
}


// Circle
circle.addEventListener('dragstart', drugCircleStart)
circle.addEventListener('dragend', drugCircleEnd)

function drugCircleStart(e){
    e.dataTransfer.setData('key', e.target.className)


    this.className += " hold-circle"
    setTimeout(()=>{
        this.className = " circle"
    },0)
    console.log("Started")

    // id = event.target.id;
    // let originalElement = document.getElementById(id)

    // copy = originalElement.cloneNode(true);
    // copy.id =  id + ++i;
    // copy.dragStart = dragStartDropZone(event);
    // current = copy;

}

function drugCircleEnd(){
    this.className += " circle"
    console.log("Stopped")
}


// Rectangle

rectangle.addEventListener('dragstart', drugRectangleStart)
rectangle.addEventListener('dragend', drugRectangleEnd)

function drugRectangleStart(e){
 
    e.dataTransfer.setData('key', e.target.className)
    this.className += " hold-rectangle"
    setTimeout(()=>{
        this.className = " rectangle"
    },0)

    
    console.log("Started")
}

function drugRectangleEnd(){
    this.className += " rectangle"
    console.log("Stopped")
}

// Diamond
diamond.addEventListener('dragstart', drugDiamondStart)
diamond.addEventListener('dragend', drugDiamondEnd)

function drugDiamondStart(e){
   
    e.dataTransfer.setData('key', e.target.className)
    this.className += " hold-diamond"
    setTimeout(()=>{
        this.className = " diamond"
    },0)
    console.log("Started")
}

function drugDiamondEnd(){
    this.className += " diamond"
    console.log("Stopped")
}

// ---------------------DRAW BOX ----------
// drawBox.addEventListener('dragenter', dragEnter)
// drawBox.addEventListener('dragover', dragOver)
// drawBox.addEventListener('drop', dragDrop)

function dragEnter(){
    // e.preventDefault()
    // this.className += " hold-diamond"
    console.log("Enterd the box")
}

function dragDrop(e){
    e.preventDefault()
    var dragItem = e.dataTransfer.getData('key')
    // Get the element by the help pf the data passed/gotten from the event i.e dragItem
    var targetElement = document.getElementsByClassName(dragItem)
    console.log(targetElement)
    
    var numberOfChildElements = drawBox.childElementCount
    console.log("Number of child elents id", numberOfChildElements)
    if (numberOfChildElements>=1){
        drawBox.removeChild(drawBox.lastElementChild)
    }
    this.append(targetElement[0])
}

function dragOver(e){
    e.preventDefault()
    console.log("move over")
}




