<div class="consults index">
	<h2><?php echo __('Consults'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_service_type'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_service_path'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_news_type'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_news_path'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_event_type'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_event_path'); ?></th>
			<th><?php echo $this->Paginator->sort('old_service_type'); ?></th>
			<th><?php echo $this->Paginator->sort('old_service_path'); ?></th>
			<th><?php echo $this->Paginator->sort('old_news_type'); ?></th>
			<th><?php echo $this->Paginator->sort('old_news_path'); ?></th>
			<th><?php echo $this->Paginator->sort('result_type'); ?></th>
			<th><?php echo $this->Paginator->sort('result_path'); ?></th>
			<th><?php echo $this->Paginator->sort('result_stu_type'); ?></th>
			<th><?php echo $this->Paginator->sort('result_stu_path'); ?></th>
			<th><?php echo $this->Paginator->sort('event_plan_type'); ?></th>
			<th><?php echo $this->Paginator->sort('event_plan_path'); ?></th>
			<th><?php echo $this->Paginator->sort('event_k_type'); ?></th>
			<th><?php echo $this->Paginator->sort('event_k_path'); ?></th>
			<th><?php echo $this->Paginator->sort('support_type'); ?></th>
			<th><?php echo $this->Paginator->sort('support_path'); ?></th>
			<th><?php echo $this->Paginator->sort('success_type'); ?></th>
			<th><?php echo $this->Paginator->sort('success_path'); ?></th>
			<th><?php echo $this->Paginator->sort('update_type'); ?></th>
			<th><?php echo $this->Paginator->sort('update_path'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_use_one'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_use_two'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_use_three'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_use_four'); ?></th>
			<th><?php echo $this->Paginator->sort('stu_use_five'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($consults as $consult): ?>
	<tr>
		<td><?php echo h($consult['Consult']['id']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_service_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_service_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_news_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_news_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_event_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_event_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['old_service_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['old_service_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['old_news_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['old_news_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['result_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['result_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['result_stu_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['result_stu_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['event_plan_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['event_plan_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['event_k_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['event_k_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['support_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['support_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['success_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['success_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['update_type']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['update_path']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_use_one']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_use_two']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_use_three']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_use_four']); ?>&nbsp;</td>
		<td><?php echo h($consult['Consult']['stu_use_five']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consult['Consult']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consult['Consult']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consult['Consult']['id']), null, __('Are you sure you want to delete # %s?', $consult['Consult']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consult'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
