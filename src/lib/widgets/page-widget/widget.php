<?php
class page_widget extends AltWidget {

	function __construct() {
		parent::__construct(
		'page_widget',
		__( 'Alternate.org Page', 'alt' ),
		array( 'description' => __( 'A link to a page on this site', 'alt' ), )
		);
	}

	public function widget( $args, $instance ) {
		require( 'display.php' );
	}

	public function form( $instance ) {
		$pages = new WP_Query( array( 'post_type' => 'page' ) );
		require( 'form.php' );
	}

}

function alt_load_page_widget() {
	register_widget( 'page_widget' );
}
add_action( 'widgets_init', 'alt_load_page_widget' );
