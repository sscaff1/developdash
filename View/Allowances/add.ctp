<?php echo $this->Form->create('Allowance'); ?>
	<fieldset>
		<legend><?php echo __('Add Allowance'); ?></legend>
	<?php
		echo $this->Form->input('payment_id');
		echo $this->Form->input('name');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
