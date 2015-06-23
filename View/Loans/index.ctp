	<h2><?php echo __('Loans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('principal'); ?></th>
			<th><?php echo $this->Paginator->sort('interest'); ?></th>
			<th><?php echo $this->Paginator->sort('amortization'); ?></th>
			<th><?php echo $this->Paginator->sort('term'); ?></th>
			<th><?php echo $this->Paginator->sort('taxable'); ?></th>
			<th><?php echo $this->Paginator->sort('compound'); ?></th>
			<th><?php echo $this->Paginator->sort('hardpay'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($loans as $loan): ?>
	<tr>
		<td><?php echo h($loan['Loan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($loan['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $loan['Budget']['id'])); ?>
		</td>
		<td><?php echo h($loan['Loan']['position']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['name']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['principal']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['interest']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['amortization']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['term']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['taxable']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['compound']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['hardpay']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['created']); ?>&nbsp;</td>
		<td><?php echo h($loan['Loan']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $loan['Loan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $loan['Loan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $loan['Loan']['id']), array(), __('Are you sure you want to delete # %s?', $loan['Loan']['id'])); ?>
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