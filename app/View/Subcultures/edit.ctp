<div class="subcultures form">
<?php echo $this->Form->create('Subculture'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subculture'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('c_system_type');
		echo $this->Form->input('c_system_path');
		echo $this->Form->input('c_upgrade_type');
		echo $this->Form->input('c_upgrade_path');
		echo $this->Form->input('c_publish_type');
		echo $this->Form->input('c_publish_path');
		echo $this->Form->input('c_estimate_type');
		echo $this->Form->input('c_estimate_path');
		echo $this->Form->input('c_apply_type');
		echo $this->Form->input('c_apply_path');
		echo $this->Form->input('c_standard_type');
		echo $this->Form->input('c_standard_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subculture.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subculture.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subcultures'), array('action' => 'index')); ?></li>
	</ul>
</div>
