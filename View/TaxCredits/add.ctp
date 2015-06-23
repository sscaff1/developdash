<?php echo $this->Form->create('TaxCredit'); ?>
	<fieldset>
		<legend><?php echo __('Add Tax Credit'); ?></legend>
	<?php
		echo $this->Form->input('budget_id');
		echo $this->Form->input('name');
		echo $this->Form->input('credit_rate');
		echo $this->Form->input('sale_price');
		echo $this->Form->input('sale_percent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>