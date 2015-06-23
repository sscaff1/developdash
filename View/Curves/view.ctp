<h2><?php echo __('Curve'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curve['Curve']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($curve['Curve']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($curve['Curve']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($curve['Curve']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
<div class="related">
	<h3><?php echo __('Related Payment Types'); ?></h3>
	<?php if (!empty($curve['PaymentType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Budget Id'); ?></th>
		<th><?php echo __('Curve Id'); ?></th>
		<th><?php echo __('Key Date Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($curve['PaymentType'] as $paymentType): ?>
		<tr>
			<td><?php echo $paymentType['id']; ?></td>
			<td><?php echo $paymentType['budget_id']; ?></td>
			<td><?php echo $paymentType['curve_id']; ?></td>
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
