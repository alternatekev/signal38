<div class="widget-field">
	<div class="field-label">
		<label for="<?php echo $this->get_field_name('portfolio'); ?>">Portfolio</label>
	</div>
	<div class="field-input">
		<select id="<?php echo $this->get_field_id('portfolio'); ?>" name="<?php echo $this->get_field_name('portfolio'); ?>">
			<option>Select a Portfolio Type</option>
			<?php
			foreach ($portfolios as $key => $value) {
				//$value->to_array();
				if( $instance['portfolio'] == $value->term_id ) {
					$selected = "selected='selected'";
				} else {
					$selected = null;
				}
				?>
				<option <?php echo $selected ?> value="<?php echo $value->term_id ?>"><?php echo $value->name ?></option>
				<?php
			}
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
