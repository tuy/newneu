<div class="subfinancials form">
<?php echo $this->Form->create('Subfinancial'); ?>
	<fieldset>
		<legend><?php echo __('Add Subfinancial'); ?></legend>
	<?php
		echo $this->Form->input('f_plan_type');
		echo $this->Form->input('f_plan_path');
		echo $this->Form->input('f_resource_type');
		echo $this->Form->input('f_resource_path');
		echo $this->Form->input('f_year_type');
		echo $this->Form->input('f_year_path');
		echo $this->Form->input('f_report_type');
		echo $this->Form->input('f_report_path');
		echo $this->Form->input('f_analyze_type');
		echo $this->Form->input('f_analyze_path');
		echo $this->Form->input('f_check_type');
		echo $this->Form->input('f_check_path');
		echo $this->Form->input('f_follow_type');
		echo $this->Form->input('f_follow_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subfinancials'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Financials'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financial'), array('controller' => 'financials', 'action' => 'add')); ?> </li>
	</ul>
</div>
