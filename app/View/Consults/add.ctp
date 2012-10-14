<div class="consults form">
<?php echo $this->Form->create('Consult'); ?>
	<fieldset>
		<legend><?php echo __('Add Consult'); ?></legend>
	<?php
		echo $this->Form->input('stu_service_type');
		echo $this->Form->input('stu_service_path');
		echo $this->Form->input('stu_news_type');
		echo $this->Form->input('stu_news_path');
		echo $this->Form->input('stu_event_type');
		echo $this->Form->input('stu_event_path');
		echo $this->Form->input('old_service_type');
		echo $this->Form->input('old_service_path');
		echo $this->Form->input('old_news_type');
		echo $this->Form->input('old_news_path');
		echo $this->Form->input('result_type');
		echo $this->Form->input('result_path');
		echo $this->Form->input('result_stu_type');
		echo $this->Form->input('result_stu_path');
		echo $this->Form->input('event_plan_type');
		echo $this->Form->input('event_plan_path');
		echo $this->Form->input('event_k_type');
		echo $this->Form->input('event_k_path');
		echo $this->Form->input('support_type');
		echo $this->Form->input('support_path');
		echo $this->Form->input('success_type');
		echo $this->Form->input('success_path');
		echo $this->Form->input('update_type');
		echo $this->Form->input('update_path');
		echo $this->Form->input('stu_use_one');
		echo $this->Form->input('stu_use_two');
		echo $this->Form->input('stu_use_three');
		echo $this->Form->input('stu_use_four');
		echo $this->Form->input('stu_use_five');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Consults'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
