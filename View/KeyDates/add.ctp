<?php echo $this->Form->create('KeyDate'); ?>
	<fieldset>
		<legend><?php echo __('Add Key Date'); ?></legend>
	<?php
		echo $this->Form->input('budget_id');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>