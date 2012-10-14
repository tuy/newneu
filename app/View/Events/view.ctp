<div class="events view">
<h2><?php  echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Evtype']['name'], array('controller' => 'evtypes', 'action' => 'view', $event['Evtype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $event['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Elem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Elem']['name'], array('controller' => 'elems', 'action' => 'view', $event['Elem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consult'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Consult']['id'], array('controller' => 'consults', 'action' => 'view', $event['Consult']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($event['Event']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attend'); ?></dt>
		<dd>
			<?php echo h($event['Event']['attend']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($event['Event']['budget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indic One'); ?></dt>
		<dd>
			<?php echo h($event['Event']['indic_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indic One R'); ?></dt>
		<dd>
			<?php echo h($event['Event']['indic_one_r']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indic Two'); ?></dt>
		<dd>
			<?php echo h($event['Event']['indic_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indic Two R'); ?></dt>
		<dd>
			<?php echo h($event['Event']['indic_two_r']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indic Three'); ?></dt>
		<dd>
			<?php echo h($event['Event']['indic_three']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indic Three R'); ?></dt>
		<dd>
			<?php echo h($event['Event']['indic_three_r']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evtypes'), array('controller' => 'evtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evtype'), array('controller' => 'evtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elems'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Elem'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consults'), array('controller' => 'consults', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult'), array('controller' => 'consults', 'action' => 'add')); ?> </li>
	</ul>
</div>
