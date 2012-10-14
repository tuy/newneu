<div class="cultures form">
<?php echo $this->Form->create('Culture'); ?>
	<fieldset>
		<legend><?php echo __('Edit Culture'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('subcultures_id');
		echo $this->Form->input('name');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('location');
		echo $this->Form->input('attend');
		echo $this->Form->input('total_name');
		echo $this->Form->input('total_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Culture.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Culture.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cultures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcultures'), array('controller' => 'subcultures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcultures'), array('controller' => 'subcultures', 'action' => 'add')); ?> </li>
	</ul>
</div>
