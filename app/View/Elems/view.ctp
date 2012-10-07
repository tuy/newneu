<div class="elems view">
<h2><?php  echo __('Elem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($elem['Elem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $elem['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Year']['name'], array('controller' => 'years', 'action' => 'view', $elem['Year']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($elem['Elem']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($elem['Elem']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relay'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Relay']['id'], array('controller' => 'relays', 'action' => 'view', $elem['Relay']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Action']['id'], array('controller' => 'actions', 'action' => 'view', $elem['Action']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Indicator']['id'], array('controller' => 'indicators', 'action' => 'view', $elem['Indicator']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Operation']['id'], array('controller' => 'operations', 'action' => 'view', $elem['Operation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Report'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Report']['id'], array('controller' => 'reports', 'action' => 'view', $elem['Report']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evaluate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Evaluate']['id'], array('controller' => 'evaluates', 'action' => 'view', $elem['Evaluate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suggestion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($elem['Suggestion']['id'], array('controller' => 'suggestions', 'action' => 'view', $elem['Suggestion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Elem'), array('action' => 'edit', $elem['Elem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Elem'), array('action' => 'delete', $elem['Elem']['id']), null, __('Are you sure you want to delete # %s?', $elem['Elem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Elems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Elem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relays'), array('controller' => 'relays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relay'), array('controller' => 'relays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluates'), array('controller' => 'evaluates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluate'), array('controller' => 'evaluates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suggestions'), array('controller' => 'suggestions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suggestion'), array('controller' => 'suggestions', 'action' => 'add')); ?> </li>
	</ul>
</div>
