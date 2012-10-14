<div class="submanagements form">
<?php echo $this->Form->create('Submanagement'); ?>
	<fieldset>
		<legend><?php echo __('Add Submanagement'); ?></legend>
	<?php
		echo $this->Form->input('m_estimate_type');
		echo $this->Form->input('m_estimate_path');
		echo $this->Form->input('m_information_type');
		echo $this->Form->input('m_information_path');
		echo $this->Form->input('m_follow_type');
		echo $this->Form->input('m_follow_path');
		echo $this->Form->input('m_support_type');
		echo $this->Form->input('m_support_path');
		echo $this->Form->input('m_relay_type');
		echo $this->Form->input('m_relay_path');
		echo $this->Form->input('m_manage_type');
		echo $this->Form->input('m_manage_path');
		echo $this->Form->input('m_eval_type');
		echo $this->Form->input('m_eval_path');
		echo $this->Form->input('m_set_type');
		echo $this->Form->input('m_set_path');
		echo $this->Form->input('m_dev_type');
		echo $this->Form->input('m_dev_path');
		echo $this->Form->input('m_share_type');
		echo $this->Form->input('m_share_path');
		echo $this->Form->input('m_publish_type');
		echo $this->Form->input('m_publish_path');
		echo $this->Form->input('m_present_type');
		echo $this->Form->input('m_present_path');
		echo $this->Form->input('m_plot_type');
		echo $this->Form->input('m_plot_path');
		echo $this->Form->input('m_info_type');
		echo $this->Form->input('m_info_path');
		echo $this->Form->input('m_esti_type');
		echo $this->Form->input('m_esti_path');
		echo $this->Form->input('m_assess_type');
		echo $this->Form->input('m_assess_path');
		echo $this->Form->input('m_send_type');
		echo $this->Form->input('m_send_path');
		echo $this->Form->input('m_board_type');
		echo $this->Form->input('m_board_path');
		echo $this->Form->input('m_analyze_type');
		echo $this->Form->input('m_analyze_path');
		echo $this->Form->input('m_esanalyze_type');
		echo $this->Form->input('m_esanalyze_path');
		echo $this->Form->input('m_plan_type');
		echo $this->Form->input('m_plan_path');
		echo $this->Form->input('m_esfollow_type');
		echo $this->Form->input('m_esfollow_path');
		echo $this->Form->input('m_adap_type');
		echo $this->Form->input('m_adap_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Submanagements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Managements'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Management'), array('controller' => 'managements', 'action' => 'add')); ?> </li>
	</ul>
</div>
