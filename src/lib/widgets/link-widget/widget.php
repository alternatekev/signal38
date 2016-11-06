<?php
// Creating the widget
class link_widget extends AltWidget {

	function __construct() {
		parent::__construct(
		'link_widget',
		__( 'External Link', 'alt' ),
		array( 'description' => __( 'a link to an external site', 'alt' ), )
		);
	}

	public function widget( $args, $instance ) {

		require( 'display.php' );
	}

	public function form( $instance ) {
		$images = new WP_Query( array( 'post_type' => 'attachment' ) );
		require "form.php";
	}
}

function alt_load_link_widget() {
	register_widget( 'link_widget' );
}
add_action( 'widgets_init', 'alt_load_link_widget' );
