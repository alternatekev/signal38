<div class="widget-field">
	<div class="field-label">
		<label for="<?php echo $this->get_field_name('page'); ?>">Page</label>
	</div>
	<div class="field-input">
		<select id="<?php echo $this->get_field_id('page'); ?>" name="<?php echo $this->get_field_name('page'); ?>">
			<?php
			if ( $pages->have_posts() ) {
				while ( $pages->have_posts() ) {
					$pages->the_post();
					$selected = ( get_the_ID() == $instance[ 'page' ] ) ? 'selected="selected"' : null;
					echo '<option ' . $selected . ' value="' . get_the_ID() . '">' . get_the_title() . '</option>';
				}
			} else {
				// no posts found
			}
			wp_reset_postdata();
			?>
		</select>
	</div>
</div>
<div class="widget-field">
	<div class="field-label">
		<label for="<?php echo $this->get_field_name('columns'); ?>">Columns</label>
	</div>
	<div class="field-input">
		<input id="<?php echo $this->get_field_id('columns'); ?>" name="<?php echo $this->get_field_name('columns'); ?>" value="<?php echo @$instance[ 'columns' ] ?>" />
	</div>
</div>
