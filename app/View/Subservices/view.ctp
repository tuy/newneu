<div class="subservices view">
<h2><?php  echo __('Subservice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S System Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_system_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S System Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_system_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Stu Upgrade Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_stu_upgrade_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Stu Upgrade Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_stu_upgrade_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Rs Upgrade Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_rs_upgrade_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Rs Upgrade Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_rs_upgrade_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Eval Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_eval_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Eval Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_eval_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Search Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_search_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Search Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_search_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Participant Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_participant_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Participant Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_participant_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Impact Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_impact_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Impact Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_impact_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Adap Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_adap_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Adap Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_adap_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Relay Type'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_relay_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('S Relay Path'); ?></dt>
		<dd>
			<?php echo h($subservice['Subservice']['s_relay_path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subservice'), array('action' => 'edit', $subservice['Subservice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subservice'), array('action' => 'delete', $subservice['Subservice']['id']), null, __('Are you sure you want to delete # %s?', $subservice['Subservice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subservices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subservice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($subservice['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Stype Id'); ?></th>
		<th><?php echo __('Subservice Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Ab Name'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subservice['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			<td><?php echo $service['organization_id']; ?></td>
			<td><?php echo $service['stype_id']; ?></td>
			<td><?php echo $service['subservice_id']; ?></td>
			<td><?php echo $service['name']; ?></td>
			<td><?php echo $service['location']; ?></td>
			<td><?php echo $service['start_date']; ?></td>
			<td><?php echo $service['end_date']; ?></td>
			<td><?php echo $service['ab_name']; ?></td>
			<td><?php echo $service['path']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'services', 'action' => 'view', $service['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'services', 'action' => 'edit', $service['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'services', 'action' => 'delete', $service['id']), null, __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
