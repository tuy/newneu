<div class="indicators form">
<?php echo $this->Form->create('Indicator'); ?>
	<fieldset>
		<legend><?php echo __('Edit Indicator'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Indicator.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Indicator.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
	</ul>
</div>
