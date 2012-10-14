<div class="qasystems form">
<?php echo $this->Form->create('Qasystem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Qasystem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('year_id');
		echo $this->Form->input('subqasystem_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Qasystem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Qasystem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Qasystems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subqasystems'), array('controller' => 'subqasystems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subqasystem'), array('controller' => 'subqasystems', 'action' => 'add')); ?> </li>
	</ul>
</div>
