function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
   if ( event.target.nodeName !== "IMG" ) {
    event.target.appendChild(document.getElementById(data));
}
}

function dropped(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Text");
    //ev.target.appendChild(document.getElementById(data));
    document.getElementById(data).style.display = 'none';		
}