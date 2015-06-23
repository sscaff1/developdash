	<h2><?php echo __('Payment Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('curve_id'); ?></th>
			<th><?php echo $this->Paginator->sort('key_date_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($paymentTypes as $paymentType): ?>
	<tr>
		<td><?php echo h($paymentType['PaymentType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($paymentType['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $paymentType['Budget']['id'])); ?>
		</td>
		<td><?php echo h($paymentType['PaymentType']['curve_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($paymentType['KeyDate']['id'], array('controller' => 'key_dates', 'action' => 'view', $paymentType['KeyDate']['id'])); ?>
		</td>
		<td><?php echo h($paymentType['PaymentType']['name']); ?>&nbsp;</td>
		<td><?php echo h($paymentType['PaymentType']['created']); ?>&nbsp;</td>
		<td><?php echo h($paymentType['PaymentType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paymentType['PaymentType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paymentType['PaymentType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paymentType['PaymentType']['id']), array(), __('Are you sure you want to delete # %s?', $paymentType['PaymentType']['id'])); ?>
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