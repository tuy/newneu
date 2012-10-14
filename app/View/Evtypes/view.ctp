<div class="evtypes view">
<h2><?php  echo __('Evtype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evtype['Evtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($evtype['Evtype']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evtype'), array('action' => 'edit', $evtype['Evtype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evtype'), array('action' => 'delete', $evtype['Evtype']['id']), null, __('Are you sure you want to delete # %s?', $evtype['Evtype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evtypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evtype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($evtype['Event'])): ?>
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
		foreach ($evtype['Event'] as $event): ?>
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
