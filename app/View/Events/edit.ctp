<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evtype_id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('elem_id');
		echo $this->Form->input('consult_id');
		echo $this->Form->input('name');
		echo $this->Form->input('location');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('attend');
		echo $this->Form->input('budget');
		echo $this->Form->input('indic_one');
		echo $this->Form->input('indic_one_r');
		echo $this->Form->input('indic_two');
		echo $this->Form->input('indic_two_r');
		echo $this->Form->input('indic_three');
		echo $this->Form->input('indic_three_r');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Event.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
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
