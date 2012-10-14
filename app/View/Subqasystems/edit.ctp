<div class="subqasystems form">
<?php echo $this->Form->create('Subqasystem'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subqasystem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('qa_system_type');
		echo $this->Form->input('qa_system_path');
		echo $this->Form->input('qa_policy_type');
		echo $this->Form->input('qa_policy_path');
		echo $this->Form->input('qa_indicator_type');
		echo $this->Form->input('qa_indicator_path');
		echo $this->Form->input('qa_operate_type');
		echo $this->Form->input('qa_operate_path');
		echo $this->Form->input('qa_result_type');
		echo $this->Form->input('qa_result_path');
		echo $this->Form->input('qa_info_type');
		echo $this->Form->input('qa_info_path');
		echo $this->Form->input('qa_invo_type');
		echo $this->Form->input('qa_invo_path');
		echo $this->Form->input('qa_exchange_type');
		echo $this->Form->input('qa_exchange_path');
		echo $this->Form->input('qa_dev_type');
		echo $this->Form->input('qa_dev_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subqasystem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subqasystem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subqasystems'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Qasystems'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qasystem'), array('controller' => 'qasystems', 'action' => 'add')); ?> </li>
	</ul>
</div>
