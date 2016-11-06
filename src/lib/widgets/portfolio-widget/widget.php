<?php
class portfolio_widget extends AltWidget {

	function __construct() {
		parent::__construct(
		'portfolio_widget',
		__( 'Alternate.org Portfolio', 'alt' ),
		array( 'description' => __( 'A link to a portfolio on this site', 'alt' ), )
		);
	}

	public function widget( $args, $instance ) {
		$context = Timber::get_context();
		Timber::render( 'widget.twig', $context );		
	}

	public function form( $instance ) {
		/*$portfolios = new WP_Query( array(
			'post_type' => 'project',
			'posts_per_page' => -1,
			'orderby' => 'post_title',
			'order' => 'ASC' ) );
		*/

		$portfolios = get_terms( array(
			'taxonomy' => 'portfolio_type',
			'hide_empty' => 'true'
		) );

		require( 'form.php' );
	}

}

function alt_load_portfolio_widget() {
	register_widget( 'portfolio_widget' );
}
add_action( 'widgets_init', 'alt_load_portfolio_widget' );
