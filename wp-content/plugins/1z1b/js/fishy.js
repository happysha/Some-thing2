jQuery( document ).ready( function( $ ) {

	//Show/hide the worm as user scrolls down/up
	$( window ).on( 'scroll', false, function() {

		var windowTop = $( window ).scrollTop();

		if ( windowTop > 300 ) {
			$( '#worm' ).css( 'top', '0' );
		} else {
			$( '#worm' ).css( 'top', windowTop - 450 + 'px' );
		}
	});

	// Scroll to the top when the worm is clicked.
	$( '#worm' ).unbind( 'click' ).click( function() {

		$( 'html,body' ).animate( { scrollTop: $( "#masthead" ).offset().top },'slow' );

	} );

	/**
	 * Handles toggling the main navigation menu for small screens.
	 */

	var $masthead = $( '#masthead' ),
	    timeout = false;

	$.fn.smallMenu = function() {
		$masthead.find( '.site-navigation' ).removeClass( 'main-navigation' ).addClass( 'main-small-navigation' );
		$masthead.find( '.site-navigation h1' ).removeClass( 'assistive-text' ).addClass( 'menu-toggle' );

		$( '.menu-toggle' ).unbind( 'click' ).click( function() {
			$masthead.find( '.menu' ).toggle();
			$( this ).toggleClass( 'toggled-on' );
		} );
	};

	// Check viewport width on first load.
	if ( $( window ).width() < 500 )
		$.fn.smallMenu();

	// Check viewport width when user resizes the browser window.
	$( window ).resize( function() {
		var browserWidth = $( window ).width();

		if ( false !== timeout )
			clearTimeout( timeout );

		timeout = setTimeout( function() {
			if ( browserWidth < 500 ) {
				$.fn.smallMenu();
			} else {
				$masthead.find( '.site-navigation' ).removeClass( 'main-small-navigation' ).addClass( 'main-navigation' );
				$masthead.find( '.site-navigation h1' ).removeClass( 'menu-toggle' ).addClass( 'assistive-text' );
				$masthead.find( '.menu' ).removeAttr( 'style' );
			}
		}, 200 );
	} );
} );