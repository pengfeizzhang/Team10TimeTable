$(function() {
    $('.droppy').draggable({
     revert: 'invalid', 
        scroll: false,
        containment: '#imageBank'
});

    $(".tableDrop").droppable();
   
    $('#bankWrapper').droppable({ revert: "invalid" });
    $('#trash').droppable({
        drop: function(event, ui) {
            ui.draggable.remove();
        }
    });
});