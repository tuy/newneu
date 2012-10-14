<div class="subresearches index">
	<h2><?php echo __('Subresearches'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_system_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_system_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_upgrade_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_upgrade_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_dev_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_dev_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_budget_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_budget_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_room_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_room_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_lib_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_lib_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_support_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_support_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_event_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_event_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_follow_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_follow_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_adap_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_adap_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_create_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_create_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_pub_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_pub_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_combine_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_combine_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_ads_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_ads_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_use_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_use_path'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_patent_type'); ?></th>
			<th><?php echo $this->Paginator->sort('rs_patent_path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subresearches as $subresearch): ?>
	<tr>
		<td><?php echo h($subresearch['Subresearch']['id']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_system_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_system_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_upgrade_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_upgrade_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_dev_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_dev_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_budget_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_budget_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_room_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_room_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_lib_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_lib_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_support_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_support_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_event_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_event_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_follow_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_follow_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_adap_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_adap_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_create_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_create_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_pub_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_pub_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_combine_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_combine_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_ads_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_ads_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_use_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_use_path']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_patent_type']); ?>&nbsp;</td>
		<td><?php echo h($subresearch['Subresearch']['rs_patent_path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subresearch['Subresearch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subresearch['Subresearch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subresearch['Subresearch']['id']), null, __('Are you sure you want to delete # %s?', $subresearch['Subresearch']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subresearch'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Researches'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>
	</ul>
</div>
