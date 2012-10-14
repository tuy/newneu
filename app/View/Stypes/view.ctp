<div class="stypes view">
<h2><?php  echo __('Stype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stype['Stype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($stype['Stype']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stype'), array('action' => 'edit', $stype['Stype']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stype'), array('action' => 'delete', $stype['Stype']['id']), null, __('Are you sure you want to delete # %s?', $stype['Stype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stype'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services'), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service'), array('controller' => 'services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($stype['Service'])): ?>
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
		foreach ($stype['Service'] as $service): ?>
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
