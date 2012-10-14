<div class="subservices form">
<?php echo $this->Form->create('Subservice'); ?>
	<fieldset>
		<legend><?php echo __('Add Subservice'); ?></legend>
	<?php
		echo $this->Form->input('s_system_type');
		echo $this->Form->input('s_system_path');
		echo $this->Form->input('s_stu_upgrade_type');
		echo $this->Form->input('s_stu_upgrade_path');
		echo $this->Form->input('s_rs_upgrade_type');
		echo $this->Form->input('s_rs_upgrade_path');
		echo $this->Form->input('s_eval_type');
		echo $this->Form->input('s_eval_path');
		echo $this->Form->input('s_search_type');
		echo $this->Form->input('s_search_path');
		echo $this->Form->input('s_participant_type');
		echo $this->Form->input('s_participant_path');
		echo $this->Form->input('s_impact_type');
		echo $this->Form->input('s_impact_path');
		echo $this->Form->input('s_adap_type');
		echo $this->Form->input('s_adap_path');
		echo $this->Form->input('s_relay_type');
		echo $this->Form->input('s_relay_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subservices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
