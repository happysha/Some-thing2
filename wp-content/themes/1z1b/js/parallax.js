( function( $ ) {

	$( document ).on( 'ready', function() {

		seaTimeout = false;

		$( window ).on( 'load resize', function() { //For responsive layouts, this is run on load and when the browser window is resized.

			if ( $( window ).width() > 1000 && $( window ).width() < 1200 ) { //Position the reeds with CSS depending on window size.
				reeds1lg = 0;
				reeds2lg = 630;
				reeds1sm = 20;
				reeds2sm = 710;
				reeds3sm = 15;
				reeds4sm = 650;
				reeds5sm = 710;

				$('#reeds-1-lg').css('left',(reeds1lg)+'px');
				$('#reeds-2-lg').css('left',(reeds2lg)+'px');
				$('#reeds-1-sm').css('left',(reeds1sm)+'px');
				$('#reeds-2-sm').css('left',(reeds2sm)+'px');
				$('#reeds-3-sm').css('left',(reeds3sm)+'px');
				$('#reeds-4-sm').css('left',(reeds4sm)+'px');
				$('#reeds-5-sm').css('left',(reeds5sm)+'px');

			}
			else if ( $( window ).width() > 1200 ) {
				reeds1lg = 0;
				reeds2lg = 880;
				reeds1sm = -40;
				reeds2sm = 960;
				reeds3sm = -10;
				reeds4sm = 900;
				reeds5sm = 960;

				$('#reeds-1-lg').css('left',(reeds1lg)+'px');
				$('#reeds-2-lg').css('left',(reeds2lg)+'px');
				$('#reeds-1-sm').css('left',(reeds1sm)+'px');
				$('#reeds-2-sm').css('left',(reeds2sm)+'px');
				$('#reeds-3-sm').css('left',(reeds3sm)+'px');
				$('#reeds-4-sm').css('left',(reeds4sm)+'px');
				$('#reeds-5-sm').css('left',(reeds5sm)+'px');
			}

			if ( false !== seaTimeout )
				clearTimeout( seaTimeout );

			seaTimeout = setTimeout( function() {

				if ( $( window ).width() > 1000 ) { //If window is wide enough, reeds will move

					$( '.reeds-wrapper' ).mousemove( function( cursor ) { //When the cursor is moved over #page, execute this function

						var currentpos = cursor.pageX; //As the cursor moves left and right, the reeds move slightly

						$('#reeds-1-lg').css('left',(window.reeds1lg-(currentpos*.015))+'px');
						$('#reeds-2-lg').css('left',(window.reeds2lg+(currentpos*.01))+'px');
						$('#reeds-1-sm').css('left',(window.reeds1sm+(currentpos*.02))+'px');
						$('#reeds-2-sm').css('left',(window.reeds2sm-(currentpos*.02))+'px');
						$('#reeds-3-sm').css('left',(window.reeds3sm+(currentpos*.005))+'px');
						$('#reeds-4-sm').css('left',(window.reeds4sm-(currentpos*.005))+'px');
						$('#reeds-5-sm').css('left',(window.reeds5sm+(currentpos*.005))+'px');

					});

				}
				else {

					$( '.reeds-wrapper' ).unbind( 'mousemove' ); //Stop reed movement

					$('#reeds-1-lg').css('left',''); //Reset the CSS
					$('#reeds-2-lg').css('left','');
					$('#reeds-1-sm').css('left','');
					$('#reeds-2-sm').css('left','');
					$('#reeds-3-sm').css('left','');
					$('#reeds-4-sm').css('left','');
					$('#reeds-5-sm').css('left','');
				}

			}, 100 );

		});

	});


    function parallaxScroll(){

		//As the user scrolls, the parallax effect occurs for various background images
		var scrolled = $( window ).scrollTop();

		//These backgrounds repeat
		$('#bubbles-1').css('background-position','0px '+(0-(scrolled*1.5))+'px');
		$('#bubbles-2').css('background-position','80px '+(80-(scrolled*.7))+'px');
		$('#fish').css('background-position',(0-(scrolled*.3))+'px 0px');
		$('#fish-2').css('background-position',(0+(scrolled*.2))+'px 0px');

		//These occur once across the entire document
		$('#whale').css('background-position',(1050-(scrolled*.2))+'px '+(1000-(scrolled*.2))+'px');
		$('#dolphin').css('background-position',(100+(scrolled*.2))+'px '+(2200+(scrolled*.25))+'px');
		$('#turtle').css('background-position',(900-(scrolled*.15))+'px '+(2500-(scrolled*.4))+'px');
		$('#jellyfish').css('background-position',(100+(scrolled*.2))+'px '+(1700-(scrolled*.3))+'px');
		$('#crab').css('background-position',(1000-(scrolled*.25))+'px 99%');
		$('#orangefish').css('background-position',(1500-(scrolled*.15))+'px 90%');
		$('#orangefish-2').css('background-position',(0+(scrolled*.15))+'px 92%');

	}

	$( window ).bind( 'scroll', function() {
    	parallaxScroll();
    });

})(jQuery)