/*
 * Image Grid - Hide Image Title Tooltip
 *
 * Copyright 2015 Joe Thomas
 *
 */

jQuery(function($) {
	$(".vcex-portfolio-grid .portfolio-entry-media-link").hover(function() {
	
		// Get the current title
		var title = $(this).attr("title");
		// Store title in a temporary attribute
		$(this).attr("portfolio_item_temp_title", title);
		// Set the title attribute to blank so we don't see the tooltips
		$(this).attr("title","");
	
	},
	
	// Restore the title when mouse no longer hovers over the element
	function() { // Fired when we leave the element
	
		// Get the title from the temporary attribute
		var title = $(this).attr("portfolio_item_temp_title");
		// Reset the title to the original
		$(this).attr("title", title);
	
	} );
	
	// Restore the title on click
	$(".vcex-portfolio-grid .portfolio-entry-media-link").click(function() {
	
		// Get the title from the temporary attribute
		var title = $(this).attr("portfolio_item_temp_title");
		// Reset the title to the original
		$(this).attr("title", title);
	
	} );
} );