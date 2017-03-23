/*
 * Image Grid - Hide Image Title Tooltip
 *
 * Copyright 2015 Joe Thomas
 *
 */

jQuery(function($) {
	$(".vcex-image-grid-entry-img").hover(function() {
	
		// Get the current title
		var title = $(this).attr("title");
		// Store title in a temporary attribute
		$(this).attr("temp_title", title);
		// Set the title attribute to blank so we don't see the tooltips
		$(this).attr("title","");
	
	},
	
	// Restore the title when mouse no longer hovers over the element
	function() { // Fired when we leave the element
	
		// Get the title from the temporary attribute
		var title = $(this).attr("temp_title");
		// Reset the title to the original
		$(this).attr("title", title);
	
	} );
	
	// Restore the title on click
	$(".vcex-image-grid-entry-img").click(function() {
	
		// Get the title from the temporary attribute
		var title = $(this).attr("temp_title");
		// Reset the title to the original
		$(this).attr("title", title);
	
	} );
} );