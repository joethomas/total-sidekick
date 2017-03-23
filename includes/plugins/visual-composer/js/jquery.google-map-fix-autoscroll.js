/*
 * Google Map - Fix Map Autoscroll
 * This script (along with pointer events disabled on the map's iframe), prevents the map
 * from being zoomed while the user is scrolling. On click, the map's pointer events will
 * be enabled. Then, on mouseleave, the pointer events will again be disabled.
 *
 * Copyright 2015 Joe Thomas
 *
 */

// Disable pointer events on map until map is hovered (prevents unintentional scrolling zoom when scrolling the page)
jQuery(function($) {

	// Disable pointer events on doc ready
	$( ".wpb_gmaps_widget .wpb_wrapper iframe" ).addClass( "map-no-scroll" );
	
	var timer;
	var delay = 800;
	
	// Enable pointer events when map wrapper is hovered
	$( ".wpb_gmaps_widget .wpb_wrapper" ).hover( function () {
		
		timer = setTimeout(function() {
		
			$( ".wpb_gmaps_widget .wpb_wrapper iframe" ).removeClass( "map-no-scroll" );
		}, delay);
	
	}, function () {
		
		clearTimeout(timer);
		
		$( ".wpb_gmaps_widget .wpb_wrapper iframe" ).addClass( "map-no-scroll" );
	
	} );

} );

// Disable pointer events on map until map is clicked
jQuery(function($) {

	// Enable pointer events when map wrapper is clicked
	$( ".wpb_gmaps_widget.map-no-scroll-persistent .wpb_wrapper" ).on( "click", function () {
	
		$( ".wpb_gmaps_widget" ).removeClass( "map-no-scroll-persistent" );
	
	} );

	// Disable pointer events when mouse leaves the map area
	$( ".wpb_gmaps_widget .wpb_wrapper iframe" ).mouseleave(function () {
	
		$( ".wpb_gmaps_widget" ).addClass( "map-no-scroll-persistent" );
	
	} );

} );