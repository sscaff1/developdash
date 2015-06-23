<?php echo $this->Form->create('Unit'); ?>
	<fieldset>
		<legend><?php echo __('Add Unit'); ?></legend>
	<?php
		echo $this->Form->input('budget_id');
		echo $this->Form->input('name');
		echo $this->Form->input('number');
		echo $this->Form->input('sqft');
		echo $this->Form->input('beds');
		echo $this->Form->input('baths');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>