$(function() {		
	$( ".columns ul" ).sortable({
		placeholder: "item-highlight",
		connectWith: ".columns ul"
	}).disableSelection();
});