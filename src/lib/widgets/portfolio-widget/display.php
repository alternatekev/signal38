<?php
	$page_ID = $instance['page'];
	$page = new WP_Query( array( 'post_type' => 'page', 'p' => $page_ID ) );
	if ( get_post_thumbnail_id( $page_ID ) ){
		$image = '<div class="bg-image" style="background-image: url( ' . wp_get_attachment_url( get_post_thumbnail_id( $page_ID ) ) .' )"></div>';
	} else {
		$no_image = 'no-image';
	}
	while ($page->have_posts()) : $page->the_post(); ?>
		<div class="widget col-md-<?php echo $instance['columns'] ?>">
			<div class="page-widget <?php echo $no_image ?>">
				<?php echo $image ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
		</div>
	<?php endwhile;
?>
