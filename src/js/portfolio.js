( function( $ ) {

	function lockScrollPosition() {
		var scrollPosition = [
		  self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
		  self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
		];

		var html = $( 'html' ); // it would make more sense to apply this to body, but IE7 won't have that
		html.data( 'scroll-position', scrollPosition );
		html.data( 'previous-overflow', html.css( 'overflow' ) );
		html.css( 'overflow', 'hidden');
		window.scrollTo( scrollPosition[ 0 ], scrollPosition[ 1 ]);
	}

	function unLockScrollPosition() {
		// un-lock scroll position
		var html = $( 'html' );
		var scrollPosition = html.data( 'scroll-position' );
		html.css( 'overflow', html.data( 'previous-overflow' ) );
		window.scrollTo( scrollPosition[ 0 ], scrollPosition[ 1 ] )
	}

	$( document ).ready( function() {

		$( '.featured-image' ).click( function(){
			lockScrollPosition();
			$( '.portfolio-container' ).addClass( 'hide' );
			$( '.portfolio-viewer.all-images' ).css( 'display', 'block' );
			$( '.content-container' ).addClass( 'showing-portfolio' )

			setTimeout( function() {
				$( '.portfolio-viewer.all-images' ).addClass( 'show' );
			}, 10 );

		} );

		$( '.view-portfolio' ).click( function() {
			$( '.featured-image' ).click();
		} );

		$( '.portfolio-viewer' ).click( function() {
			unLockScrollPosition();
			$( '.content-container' ).removeClass( 'showing-portfolio' )
			$( '.portfolio-container' ).removeClass( 'hide' );
			$( '.portfolio-container' ).css( 'display', 'block' );
			$( '.portfolio-viewer.all-images' ).removeClass( 'show' );
			$( '.portfolio-viewer.single-image' ).removeClass( 'show' );

			setTimeout( function() {
				$( '.portfolio-viewer' ).css( 'display', 'none' );
			}, 300 );
		} );

		$( '.popup' ).click( function() {
			lockScrollPosition();
			$( '.portfolio-viewer.single-image' ).empty();

			var image = $( this ).find( 'img.portfolio-image' );
			var description = $( this ).find( '.portfolio-description' );
			description.clone().appendTo( '.portfolio-viewer.single-image' ).addClass( 'show' );
			image.clone().appendTo( '.portfolio-viewer.single-image' ).addClass( 'large' );

			$( '.portfolio-container' ).addClass( 'hide' );
			$( '.portfolio-viewer.single-image' ).css( 'display', 'block' );
			$( '.content-container' ).addClass( 'showing-portfolio' );

			setTimeout( function() {
				$( '.portfolio-viewer.single-image' ).addClass( 'show' );
			}, 10 );
		} );

	} );

} )( jQuery );
