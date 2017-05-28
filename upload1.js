window.onload = function(){
//Check File API support
if(window.File && window.FileList && window.FileReader)
{
var filesInput = document.getElementById("files");
filesInput.addEventListener("change", function(event){
var files = event.target.files; //FileList object
var output = document.getElementById("result");
for(var i = 0; i< files.length; i++)
{
var file = files[i];
//Only pics
if(!file.type.match('image'))
continue;
var picReader = new FileReader();
picReader.addEventListener("load",function(event){
var picFile = event.target;
window.thumbId = (window.thumbId || 0)+1;
$('<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)"></div>').appendTo('#imageBank').append("<img class='droppy' id='thumbnail"+window.thumbId+"' draggable='true' ondragstart='drag(event)' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/>");
});
//Read the image
picReader.readAsDataURL(file);
}
});
}
else
{
console.log("Your browser does not support File API");
}
}