<div class="submanagements index">
	<h2><?php echo __('Submanagements'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('m_estimate_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_estimate_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_information_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_information_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_follow_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_follow_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_support_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_support_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_relay_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_relay_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_manage_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_manage_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_eval_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_eval_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_set_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_set_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_dev_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_dev_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_share_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_share_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_publish_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_publish_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_present_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_present_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_plot_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_plot_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_info_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_info_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_esti_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_esti_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_assess_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_assess_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_send_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_send_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_board_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_board_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_analyze_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_analyze_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_esanalyze_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_esanalyze_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_plan_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_plan_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_esfollow_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_esfollow_path'); ?></th>
			<th><?php echo $this->Paginator->sort('m_adap_type'); ?></th>
			<th><?php echo $this->Paginator->sort('m_adap_path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($submanagements as $submanagement): ?>
	<tr>
		<td><?php echo h($submanagement['Submanagement']['id']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_estimate_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_estimate_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_information_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_information_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_follow_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_follow_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_support_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_support_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_relay_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_relay_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_manage_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_manage_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_eval_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_eval_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_set_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_set_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_dev_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_dev_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_share_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_share_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_publish_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_publish_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_present_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_present_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_plot_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_plot_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_info_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_info_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_esti_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_esti_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_assess_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_assess_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_send_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_send_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_board_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_board_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_analyze_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_analyze_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_esanalyze_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_esanalyze_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_plan_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_plan_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_esfollow_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_esfollow_path']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_adap_type']); ?>&nbsp;</td>
		<td><?php echo h($submanagement['Submanagement']['m_adap_path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $submanagement['Submanagement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $submanagement['Submanagement']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $submanagement['Submanagement']['id']), null, __('Are you sure you want to delete # %s?', $submanagement['Submanagement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Submanagement'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Managements'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Management'), array('controller' => 'managements', 'action' => 'add')); ?> </li>
	</ul>
</div>
