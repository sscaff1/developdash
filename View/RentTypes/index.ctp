	<h2><?php echo __('Rent Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rentTypes as $rentType): ?>
	<tr>
		<td><?php echo h($rentType['RentType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rentType['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $rentType['Budget']['id'])); ?>
		</td>
		<td><?php echo h($rentType['RentType']['name']); ?>&nbsp;</td>
		<td><?php echo h($rentType['RentType']['created']); ?>&nbsp;</td>
		<td><?php echo h($rentType['RentType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rentType['RentType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rentType['RentType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rentType['RentType']['id']), array(), __('Are you sure you want to delete # %s?', $rentType['RentType']['id'])); ?>
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