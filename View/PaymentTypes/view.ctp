<h2><?php echo __('Payment Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paymentType['Budget']['name'], array('controller' => 'budgets', 'action' => 'view', $paymentType['Budget']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curve Id'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['curve_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key Date'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paymentType['KeyDate']['id'], array('controller' => 'key_dates', 'action' => 'view', $paymentType['KeyDate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
