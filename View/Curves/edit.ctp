<?php echo $this->Form->create('Curve'); ?>
	<fieldset>
		<legend><?php echo __('Edit Curve'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>