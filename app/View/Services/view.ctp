<div class="services view">
<h2><?php  echo __('Service'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $service['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['Stype']['name'], array('controller' => 'stypes', 'action' => 'view', $service['Stype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subservice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($service['Subservice']['id'], array('controller' => 'subservices', 'action' => 'view', $service['Subservice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($service['Service']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($service['Service']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($service['Service']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($service['Service']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ab Name'); ?></dt>
		<dd>
			<?php echo h($service['Service']['ab_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($service['Service']['path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service'), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Service'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stypes'), array('controller' => 'stypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stype'), array('controller' => 'stypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subservices'), array('controller' => 'subservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subservice'), array('controller' => 'subservices', 'action' => 'add')); ?> </li>
	</ul>
</div>
