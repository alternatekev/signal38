<?php
require get_template_directory() . $libdir . "widgets/alt-widget.php";
require get_template_directory() . $libdir . "widgets/page-widget/widget.php";
require get_template_directory() . $libdir . "widgets/link-widget/widget.php";
require get_template_directory() . $libdir . "widgets/portfolio-widget/widget.php";

function register_widget_form_styles() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'register_widget_form_styles' ); ?>
