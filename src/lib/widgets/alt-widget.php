<?php

class AltWidget extends WP_Widget {

	public function update( $new_instance, $old_instance ) {
		$instance = array();

		foreach ( $new_instance as $key => $value ) {
			$instance[ $key ] = ( ! empty( $new_instance[ $key ] ) ) ? strip_tags( $new_instance[ $key ] ) : '';
		}
		return $instance;
	}

	public function form( $instance ){}
	public function widget( $args, $instance ){}

}
