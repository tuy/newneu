<div class="managements view">
<h2><?php  echo __('Management'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($management['Management']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($management['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $management['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($management['Year']['name'], array('controller' => 'years', 'action' => 'view', $management['Year']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submanagement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($management['Submanagement']['id'], array('controller' => 'submanagements', 'action' => 'view', $management['Submanagement']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Management'), array('action' => 'edit', $management['Management']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Management'), array('action' => 'delete', $management['Management']['id']), null, __('Are you sure you want to delete # %s?', $management['Management']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Managements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Management'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submanagements'), array('controller' => 'submanagements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submanagement'), array('controller' => 'submanagements', 'action' => 'add')); ?> </li>
	</ul>
</div>
