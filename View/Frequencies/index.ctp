	<h2><?php echo __('Frequencies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($frequencies as $frequency): ?>
	<tr>
		<td><?php echo h($frequency['Frequency']['id']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['name']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['created']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $frequency['Frequency']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $frequency['Frequency']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $frequency['Frequency']['id']), array(), __('Are you sure you want to delete # %s?', $frequency['Frequency']['id'])); ?>
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