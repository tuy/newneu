<div class="cultures view">
<h2><?php  echo __('Culture'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($culture['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $culture['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcultures'); ?></dt>
		<dd>
			<?php echo $this->Html->link($culture['Subcultures']['id'], array('controller' => 'subcultures', 'action' => 'view', $culture['Subcultures']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attend'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['attend']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Name'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['total_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Path'); ?></dt>
		<dd>
			<?php echo h($culture['Culture']['total_path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Culture'), array('action' => 'edit', $culture['Culture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Culture'), array('action' => 'delete', $culture['Culture']['id']), null, __('Are you sure you want to delete # %s?', $culture['Culture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cultures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Culture'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcultures'), array('controller' => 'subcultures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcultures'), array('controller' => 'subcultures', 'action' => 'add')); ?> </li>
	</ul>
</div>
