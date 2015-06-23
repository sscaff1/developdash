<?php $b_id = $this->Session->read('budget_id'); ?>
<div class="pure-menu pure-menu-open pure-menu-horizontal" id="main_site_menu">
	<ul id="std-menu-items">
		<li><?php echo $this->Html->link('Projects', array('controller' => 'projects', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link('Budgets', array('controller' => 'budgets', 'action' => 'index')); ?></li>
		<li><a href="#">Income</a>
			<ul>
				<li><a href="#">Add</a>
					<ul>				
						<li><?php echo $this->Html->link('Add Unit', array('controller' => 'units', 'action' => 'add', $b_id)); ?></li>
					</ul>
				</li>
			</ul>
		</li>
    </ul>
</div>