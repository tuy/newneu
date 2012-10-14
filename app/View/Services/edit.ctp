<div class="services form">
<?php echo $this->Form->create('Service'); ?>
	<fieldset>
		<legend><?php echo __('Edit Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('stype_id');
		echo $this->Form->input('subservice_id');
		echo $this->Form->input('name');
		echo $this->Form->input('location');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('ab_name');
		echo $this->Form->input('path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Service.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Service.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stypes'), array('controller' => 'stypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stype'), array('controller' => 'stypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subservices'), array('controller' => 'subservices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subservice'), array('controller' => 'subservices', 'action' => 'add')); ?> </li>
	</ul>
</div>
