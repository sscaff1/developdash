	<h2><?php echo __('Key Dates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($keyDates as $keyDate): ?>
	<tr>
		<td><?php echo h($keyDate['KeyDate']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($keyDate['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $keyDate['Budget']['id'])); ?>
		</td>
		<td><?php echo h($keyDate['KeyDate']['description']); ?>&nbsp;</td>
		<td><?php echo h($keyDate['KeyDate']['date']); ?>&nbsp;</td>
		<td><?php echo h($keyDate['KeyDate']['created']); ?>&nbsp;</td>
		<td><?php echo h($keyDate['KeyDate']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $keyDate['KeyDate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $keyDate['KeyDate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $keyDate['KeyDate']['id']), array(), __('Are you sure you want to delete # %s?', $keyDate['KeyDate']['id'])); ?>
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