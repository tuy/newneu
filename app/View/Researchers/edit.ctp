<div class="researchers form">
<?php echo $this->Form->create('Researcher'); ?>
	<fieldset>
		<legend><?php echo __('Edit Researcher'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Researcher.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Researcher.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Researchers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Researches'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>
	</ul>
</div>
