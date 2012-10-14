<div class="subqasystems index">
	<h2><?php echo __('Subqasystems'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_system_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_system_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_policy_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_policy_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_indicator_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_indicator_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_operate_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_operate_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_result_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_result_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_info_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_info_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_invo_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_invo_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_exchange_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_exchange_path'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_dev_type'); ?></th>
			<th><?php echo $this->Paginator->sort('qa_dev_path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subqasystems as $subqasystem): ?>
	<tr>
		<td><?php echo h($subqasystem['Subqasystem']['id']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_system_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_system_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_policy_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_policy_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_indicator_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_indicator_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_operate_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_operate_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_result_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_result_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_info_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_info_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_invo_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_invo_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_exchange_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_exchange_path']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_dev_type']); ?>&nbsp;</td>
		<td><?php echo h($subqasystem['Subqasystem']['qa_dev_path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subqasystem['Subqasystem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subqasystem['Subqasystem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subqasystem['Subqasystem']['id']), null, __('Are you sure you want to delete # %s?', $subqasystem['Subqasystem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subqasystem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Qasystems'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qasystem'), array('controller' => 'qasystems', 'action' => 'add')); ?> </li>
	</ul>
</div>
