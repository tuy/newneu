<div class="consults view">
<h2><?php  echo __('Consult'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Service Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_service_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Service Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_service_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu News Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_news_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu News Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_news_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Event Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_event_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Event Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_event_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Old Service Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['old_service_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Old Service Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['old_service_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Old News Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['old_news_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Old News Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['old_news_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['result_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['result_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result Stu Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['result_stu_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result Stu Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['result_stu_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Plan Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['event_plan_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Plan Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['event_plan_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event K Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['event_k_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event K Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['event_k_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Support Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['support_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Support Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['support_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Success Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['success_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Success Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['success_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Type'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['update_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Path'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['update_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Use One'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_use_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Use Two'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_use_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Use Three'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_use_three']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Use Four'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_use_four']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stu Use Five'); ?></dt>
		<dd>
			<?php echo h($consult['Consult']['stu_use_five']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consult'), array('action' => 'edit', $consult['Consult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consult'), array('action' => 'delete', $consult['Consult']['id']), null, __('Are you sure you want to delete # %s?', $consult['Consult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consults'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consult'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($consult['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evtype Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Elem Id'); ?></th>
		<th><?php echo __('Consult Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Attend'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th><?php echo __('Indic One'); ?></th>
		<th><?php echo __('Indic One R'); ?></th>
		<th><?php echo __('Indic Two'); ?></th>
		<th><?php echo __('Indic Two R'); ?></th>
		<th><?php echo __('Indic Three'); ?></th>
		<th><?php echo __('Indic Three R'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($consult['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['evtype_id']; ?></td>
			<td><?php echo $event['organization_id']; ?></td>
			<td><?php echo $event['elem_id']; ?></td>
			<td><?php echo $event['consult_id']; ?></td>
			<td><?php echo $event['name']; ?></td>
			<td><?php echo $event['location']; ?></td>
			<td><?php echo $event['start_date']; ?></td>
			<td><?php echo $event['end_date']; ?></td>
			<td><?php echo $event['attend']; ?></td>
			<td><?php echo $event['budget']; ?></td>
			<td><?php echo $event['indic_one']; ?></td>
			<td><?php echo $event['indic_one_r']; ?></td>
			<td><?php echo $event['indic_two']; ?></td>
			<td><?php echo $event['indic_two_r']; ?></td>
			<td><?php echo $event['indic_three']; ?></td>
			<td><?php echo $event['indic_three_r']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), null, __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
