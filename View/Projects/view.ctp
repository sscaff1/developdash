<h2><?php echo $project['Project']['name']; ?></h2>
	<dl>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $project['Project']['address']."<br />".
			$project['Project']['city'].', '.$project['State']['short_name'].' '.$project['Project']['zip_code']; ?>
			&nbsp;
		</dd>
	</dl>
<div class="related">
	<h3><?php echo __('Budgets'); ?>
		<?php echo $this->Html->link('Add New', array('controller' => 'budgets', 'action' => 'add_project', $project['Project']['id']), array('class' => 'actions'))?></h3>
	<?php if (!empty($project['Budget'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Vacancy Rate'); ?></th>
		<th><?php echo __('Other Income'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($project['Budget'] as $budget): ?>
		<tr>
			<td><?php echo $budget['name']; ?></td>
			<td><?php echo $this->Number->toPercentage($budget['vacancy_rate']); ?></td>
			<td><?php echo $this->Number->toPercentage($budget['other_income']); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'budgets', 'action' => 'view', $budget['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'budgets', 'action' => 'edit', $budget['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'budgets', 'action' => 'delete', $budget['id']), array(), __('Are you sure you want to delete # %s?', $budget['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
