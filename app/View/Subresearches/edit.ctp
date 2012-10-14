<div class="subresearches form">
<?php echo $this->Form->create('Subresearch'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subresearch'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rs_system_type');
		echo $this->Form->input('rs_system_path');
		echo $this->Form->input('rs_upgrade_type');
		echo $this->Form->input('rs_upgrade_path');
		echo $this->Form->input('rs_dev_type');
		echo $this->Form->input('rs_dev_path');
		echo $this->Form->input('rs_budget_type');
		echo $this->Form->input('rs_budget_path');
		echo $this->Form->input('rs_room_type');
		echo $this->Form->input('rs_room_path');
		echo $this->Form->input('rs_lib_type');
		echo $this->Form->input('rs_lib_path');
		echo $this->Form->input('rs_support_type');
		echo $this->Form->input('rs_support_path');
		echo $this->Form->input('rs_event_type');
		echo $this->Form->input('rs_event_path');
		echo $this->Form->input('rs_follow_type');
		echo $this->Form->input('rs_follow_path');
		echo $this->Form->input('rs_adap_type');
		echo $this->Form->input('rs_adap_path');
		echo $this->Form->input('rs_create_type');
		echo $this->Form->input('rs_create_path');
		echo $this->Form->input('rs_pub_type');
		echo $this->Form->input('rs_pub_path');
		echo $this->Form->input('rs_combine_type');
		echo $this->Form->input('rs_combine_path');
		echo $this->Form->input('rs_ads_type');
		echo $this->Form->input('rs_ads_path');
		echo $this->Form->input('rs_use_type');
		echo $this->Form->input('rs_use_path');
		echo $this->Form->input('rs_patent_type');
		echo $this->Form->input('rs_patent_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subresearch.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subresearch.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subresearches'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Researches'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>
	</ul>
</div>
