	<h2><?php echo __('Tax Credits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('credit_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_price'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_percent'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($taxCredits as $taxCredit): ?>
	<tr>
		<td><?php echo h($taxCredit['TaxCredit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($taxCredit['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $taxCredit['Budget']['id'])); ?>
		</td>
		<td><?php echo h($taxCredit['TaxCredit']['name']); ?>&nbsp;</td>
		<td><?php echo h($taxCredit['TaxCredit']['credit_rate']); ?>&nbsp;</td>
		<td><?php echo h($taxCredit['TaxCredit']['sale_price']); ?>&nbsp;</td>
		<td><?php echo h($taxCredit['TaxCredit']['sale_percent']); ?>&nbsp;</td>
		<td><?php echo h($taxCredit['TaxCredit']['created']); ?>&nbsp;</td>
		<td><?php echo h($taxCredit['TaxCredit']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $taxCredit['TaxCredit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taxCredit['TaxCredit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taxCredit['TaxCredit']['id']), array(), __('Are you sure you want to delete # %s?', $taxCredit['TaxCredit']['id'])); ?>
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