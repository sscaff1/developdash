<h2><?php echo __('Tax Credit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taxCredit['TaxCredit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taxCredit['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $taxCredit['Budget']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($taxCredit['TaxCredit']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credit Rate'); ?></dt>
		<dd>
			<?php echo h($taxCredit['TaxCredit']['credit_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Price'); ?></dt>
		<dd>
			<?php echo h($taxCredit['TaxCredit']['sale_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Percent'); ?></dt>
		<dd>
			<?php echo h($taxCredit['TaxCredit']['sale_percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($taxCredit['TaxCredit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($taxCredit['TaxCredit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($taxCredit['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Tax Credit Id'); ?></th>
		<th><?php echo __('Loan Id'); ?></th>
		<th><?php echo __('Key Date Id'); ?></th>
		<th><?php echo __('Frequency Id'); ?></th>
		<th><?php echo __('Rent Type Id'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Growth Rate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taxCredit['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['budget_id']; ?></td>
			<td><?php echo $payment['tax_credit_id']; ?></td>
			<td><?php echo $payment['loan_id']; ?></td>
			<td><?php echo $payment['key_date_id']; ?></td>
			<td><?php echo $payment['frequency_id']; ?></td>
			<td><?php echo $payment['rent_type_id']; ?></td>
			<td><?php echo $payment['unit_id']; ?></td>
			<td><?php echo $payment['name']; ?></td>
			<td><?php echo $payment['date']; ?></td>
			<td><?php echo $payment['amount']; ?></td>
			<td><?php echo $payment['growth_rate']; ?></td>
			<td><?php echo $payment['created']; ?></td>
			<td><?php echo $payment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), array(), __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
