<?php echo $this->Form->create('Budget'); ?>
	<fieldset>
		<legend><?php echo __('Add Budget'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('vacancy_rate', 
				array('after' => '%',
					'style' => 'display:inline;'));
		echo $this->Form->input('other_income', 
				array('after' => '%',
					'style' => 'display:inline;'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>