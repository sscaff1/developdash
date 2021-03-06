	<h2><?php echo __('Budgets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('project_id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('vacancy_rate'); ?></th>
		<th><?php echo $this->Paginator->sort('other_income'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($budgets as $budget): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($budget['Project']['name'], array('controller' => 'projects', 'action' => 'view', $budget['Project']['id'])); ?>
		</td>
		<td><?php echo h($budget['Budget']['name']); ?>&nbsp;</td>
		<td><?php echo $this->Number->toPercentage($budget['Budget']['vacancy_rate']); ?>&nbsp;</td>
		<td><?php echo $this->Number->toPercentage($budget['Budget']['other_income']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $budget['Budget']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $budget['Budget']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $budget['Budget']['id']), array(), __('Are you sure you want to delete # %s?', $budget['Budget']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>