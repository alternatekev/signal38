<div class="widget-field">
	<div class="field-label">
		<label for="<?php echo $this->get_field_name('url'); ?>">URL</label>
	</div>
	<div class="field-input">
		<input id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" value="<?php echo @$instance[ 'url' ] ?>" />
	</div>
</div>
<div class="widget-field">
	<div class="field-label">
		<label for="<?php echo $this->get_field_name('link_text'); ?>">Link Text</label>
	</div>
	<div class="field-input">
		<input id="<?php echo $this->get_field_id('link_text'); ?>" name="<?php echo $this->get_field_name('link_text'); ?>" value="<?php echo @$instance[ 'link_text' ] ?>" />
	</div>
</div>
<div class="widget-field">
	<div class="field-label">
		<label for="<?php echo $this->get_field_name('image'); ?>">Image</label>
	</div>
	<div class="field-input">
		<select id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>">
			<?php
			if ( $images->have_posts() ) {
				while ( $images->have_posts() ) {
					$images->the_post();
					$selected = ( get_the_ID() == $instance[ 'image' ] ) ? 'selected="selected"' : null;
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
