<h2><?php echo $budget['Budget']['name']; ?></h2>
	<dl>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($budget['Project']['name'], array('controller' => 'projects', 'action' => 'view', $budget['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vacancy Rate'); ?></dt>
		<dd>
			<?php echo $this->Number->toPercentage($budget['Budget']['vacancy_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Income'); ?></dt>
		<dd>
			<?php echo $this->Number->toPercentage($budget['Budget']['other_income']); ?>
			&nbsp;
		</dd>
	</dl>
<div class="related">
	<h3><?php echo __('Related Key Dates'); ?></h3>
	<?php if (!empty($budget['KeyDate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budget['KeyDate'] as $keyDate): ?>
		<tr>
			<td><?php echo $keyDate['id']; ?></td>
			<td><?php echo $keyDate['budget_id']; ?></td>
			<td><?php echo $keyDate['description']; ?></td>
			<td><?php echo $keyDate['date']; ?></td>
			<td><?php echo $keyDate['created']; ?></td>
			<td><?php echo $keyDate['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'key_dates', 'action' => 'view', $keyDate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'key_dates', 'action' => 'edit', $keyDate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'key_dates', 'action' => 'delete', $keyDate['id']), array(), __('Are you sure you want to delete # %s?', $keyDate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Key Date'), array('controller' => 'key_dates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Loans'); ?></h3>
	<?php if (!empty($budget['Loan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Principal'); ?></th>
		<th><?php echo __('Interest'); ?></th>
		<th><?php echo __('Amortization'); ?></th>
		<th><?php echo __('Term'); ?></th>
		<th><?php echo __('Taxable'); ?></th>
		<th><?php echo __('Compound'); ?></th>
		<th><?php echo __('Hardpay'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budget['Loan'] as $loan): ?>
		<tr>
			<td><?php echo $loan['id']; ?></td>
			<td><?php echo $loan['budget_id']; ?></td>
			<td><?php echo $loan['position']; ?></td>
			<td><?php echo $loan['name']; ?></td>
			<td><?php echo $loan['principal']; ?></td>
			<td><?php echo $loan['interest']; ?></td>
			<td><?php echo $loan['amortization']; ?></td>
			<td><?php echo $loan['term']; ?></td>
			<td><?php echo $loan['taxable']; ?></td>
			<td><?php echo $loan['compound']; ?></td>
			<td><?php echo $loan['hardpay']; ?></td>
			<td><?php echo $loan['created']; ?></td>
			<td><?php echo $loan['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loans', 'action' => 'view', $loan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loan['id']), array(), __('Are you sure you want to delete # %s?', $loan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payment Types'); ?></h3>
	<?php if (!empty($budget['PaymentType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Key Date Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budget['PaymentType'] as $paymentType): ?>
		<tr>
			<td><?php echo $paymentType['id']; ?></td>
			<td><?php echo $paymentType['budget_id']; ?></td>
			<td><?php echo $paymentType['key_date_id']; ?></td>
			<td><?php echo $paymentType['name']; ?></td>
			<td><?php echo $paymentType['created']; ?></td>
			<td><?php echo $paymentType['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payment_types', 'action' => 'view', $paymentType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payment_types', 'action' => 'edit', $paymentType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payment_types', 'action' => 'delete', $paymentType['id']), array(), __('Are you sure you want to delete # %s?', $paymentType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payments'); ?></h3>
	<?php if (!empty($budget['Payment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Development Cost Id'); ?></th>
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
	<?php foreach ($budget['Payment'] as $payment): ?>
		<tr>
			<td><?php echo $payment['id']; ?></td>
			<td><?php echo $payment['budget_id']; ?></td>
			<td><?php echo $payment['development_cost_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Rent Types'); ?></h3>
	<?php if (!empty($budget['RentType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budget['RentType'] as $rentType): ?>
		<tr>
			<td><?php echo $rentType['id']; ?></td>
			<td><?php echo $rentType['budget_id']; ?></td>
			<td><?php echo $rentType['name']; ?></td>
			<td><?php echo $rentType['created']; ?></td>
			<td><?php echo $rentType['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rent_types', 'action' => 'view', $rentType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rent_types', 'action' => 'edit', $rentType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rent_types', 'action' => 'delete', $rentType['id']), array(), __('Are you sure you want to delete # %s?', $rentType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rent Type'), array('controller' => 'rent_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tax Credits'); ?></h3>
	<?php if (!empty($budget['TaxCredit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Credit Rate'); ?></th>
		<th><?php echo __('Sale Price'); ?></th>
		<th><?php echo __('Sale Percent'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budget['TaxCredit'] as $taxCredit): ?>
		<tr>
			<td><?php echo $taxCredit['id']; ?></td>
			<td><?php echo $taxCredit['budget_id']; ?></td>
			<td><?php echo $taxCredit['name']; ?></td>
			<td><?php echo $taxCredit['credit_rate']; ?></td>
			<td><?php echo $taxCredit['sale_price']; ?></td>
			<td><?php echo $taxCredit['sale_percent']; ?></td>
			<td><?php echo $taxCredit['created']; ?></td>
			<td><?php echo $taxCredit['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tax_credits', 'action' => 'view', $taxCredit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tax_credits', 'action' => 'edit', $taxCredit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tax_credits', 'action' => 'delete', $taxCredit['id']), array(), __('Are you sure you want to delete # %s?', $taxCredit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tax Credit'), array('controller' => 'tax_credits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Units'); ?></h3>
	<?php if (!empty($budget['Unit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Sqft'); ?></th>
		<th><?php echo __('Beds'); ?></th>
		<th><?php echo __('Baths'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($budget['Unit'] as $unit): ?>
		<tr>
			<td><?php echo $unit['id']; ?></td>
			<td><?php echo $unit['budget_id']; ?></td>
			<td><?php echo $unit['name']; ?></td>
			<td><?php echo $unit['number']; ?></td>
			<td><?php echo $unit['sqft']; ?></td>
			<td><?php echo $unit['beds']; ?></td>
			<td><?php echo $unit['baths']; ?></td>
			<td><?php echo $unit['created']; ?></td>
			<td><?php echo $unit['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'units', 'action' => 'view', $unit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'units', 'action' => 'edit', $unit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'units', 'action' => 'delete', $unit['id']), array(), __('Are you sure you want to delete # %s?', $unit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
