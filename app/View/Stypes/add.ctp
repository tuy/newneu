<div class="stypes form">
<?php echo $this->Form->create('Stype'); ?>
	<fieldset>
		<legend><?php echo __('Add Stype'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Stypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Home'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
