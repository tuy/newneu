<div class="managements form">
<?php echo $this->Form->create('Management'); ?>
	<fieldset>
		<legend><?php echo __('Edit Management'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('year_id');
		echo $this->Form->input('submanagement_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Management.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Management.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Managements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submanagements'), array('controller' => 'submanagements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submanagement'), array('controller' => 'submanagements', 'action' => 'add')); ?> </li>
	</ul>
</div>
