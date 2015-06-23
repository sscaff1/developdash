	<h2><?php echo __('Units'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('sqft'); ?></th>
			<th><?php echo $this->Paginator->sort('beds'); ?></th>
			<th><?php echo $this->Paginator->sort('baths'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($units as $unit): ?>
	<tr>
		<td><?php echo h($unit['Unit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($unit['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $unit['Budget']['id'])); ?>
		</td>
		<td><?php echo h($unit['Unit']['name']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['number']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['sqft']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['beds']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['baths']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['created']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $unit['Unit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $unit['Unit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $unit['Unit']['id']), array(), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?>
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