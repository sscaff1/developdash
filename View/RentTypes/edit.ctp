<?php echo $this->Form->create('RentType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rent Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('budget_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>