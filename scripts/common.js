$(function() {		
	$(".columns ul").sortable({
		cursorAt: 'top',
		handle: '.move',
		placeholder: "item-highlight",
		connectWith: ".columns ul",
		start: function(event, ui) {
			$("#delete").fadeIn();
		},
		stop: function(event, ui) {
			$("#delete").fadeOut();
			console.log("Save order.");
		}
	}).disableSelection();
	
	$(".columns ul").draggable({
		helper: 'clone',
		cursor: 'move'
	});
	
	$("#delete").droppable({
		over: function() {
			console.log("Over");
		},
		out: function() {
			console.log("Out");
		},
		drop: function(event, ui) {
			// $(".columns ul").sortable('cancel');
			$(ui.draggable).remove();
			console.log("Delete project.");
		}
	});
});