$(function() {
	activateColumns();
});

function activateColumns() {
	$(".columns ul").sortable({
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
	
	// $(".columns ul").draggable({
	// 	helper: 'clone',
	// 	cursor: 'move'
	// });
	
	$("#delete").droppable({
		tolerance: 'touch',
		drop: function(event, ui) {
			$(ui.draggable).remove();
			console.log("Delete project.");
		}
	});
	
	$(".columns ul li span").click(function() {
		var project = $(this).parent().attr("data-id");
		
		console.log(project);
		
		$("#container").slideUp(500, function() {
			$("#container").html($(".loader").html());
			$("#container").slideDown(500);
		});
	});
}