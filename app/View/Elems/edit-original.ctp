<div class="elems form">
<?php echo $this->Form->create('Elem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Elem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('year_id');
		echo $this->Form->input('name');
		echo $this->Form->input('date');
		echo $this->Form->input('relay_id');
		echo $this->Form->input('action_id');
		echo $this->Form->input('indicator_id');
		echo $this->Form->input('operation_id');
		echo $this->Form->input('report_id');
		echo $this->Form->input('evaluate_id');
		echo $this->Form->input('suggestion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Elem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Elem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Elems'), array('action' => 'index')); ?></li>
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
