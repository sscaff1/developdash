<?php echo $this->Form->create('Budget'); ?>
	<fieldset>
		<legend><?php echo __('Edit Budget'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('project_id');
		echo $this->Form->input('name');
		echo $this->Form->input('vacancy_rate');
		echo $this->Form->input('other_income');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>