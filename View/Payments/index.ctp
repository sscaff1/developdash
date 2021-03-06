	<h2><?php echo __('Payments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_credit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('loan_id'); ?></th>
			<th><?php echo $this->Paginator->sort('key_date_id'); ?></th>
			<th><?php echo $this->Paginator->sort('frequency_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rent_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('growth_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($payments as $payment): ?>
	<tr>
		<td><?php echo h($payment['Payment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($payment['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $payment['Budget']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['TaxCredit']['name'], array('controller' => 'tax_credits', 'action' => 'view', $payment['TaxCredit']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['Loan']['name'], array('controller' => 'loans', 'action' => 'view', $payment['Loan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['KeyDate']['id'], array('controller' => 'key_dates', 'action' => 'view', $payment['KeyDate']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['Frequency']['name'], array('controller' => 'frequencies', 'action' => 'view', $payment['Frequency']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['RentType']['name'], array('controller' => 'rent_types', 'action' => 'view', $payment['RentType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($payment['Unit']['name'], array('controller' => 'units', 'action' => 'view', $payment['Unit']['id'])); ?>
		</td>
		<td><?php echo h($payment['Payment']['payment_type_id']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['name']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['date']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['amount']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['growth_rate']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['created']); ?>&nbsp;</td>
		<td><?php echo h($payment['Payment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payment['Payment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payment['Payment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payment['Payment']['id']), array(), __('Are you sure you want to delete # %s?', $payment['Payment']['id'])); ?>
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
