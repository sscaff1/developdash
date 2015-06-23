<?php echo $this->Form->create('Project'); ?>
		<legend><?php echo __('Add Project'); ?></legend>
	<?php
		echo $this->Form->input('name',
			array('label' => 'Project Name'));
		echo $this->Form->input('description',
			array('label' => 'Project Description'));
		echo $this->Form->input('address',
			array('label' => 'Address'));
		echo $this->Form->input('city',
			array('label' => 'City'));
		echo $this->Form->input('state_id',
			array('empty' => '--'));
		echo $this->Form->input('zip_code',
			array('label' => 'Zip Code'));
	?>
<?php echo $this->Form->end(__('Submit')); ?>