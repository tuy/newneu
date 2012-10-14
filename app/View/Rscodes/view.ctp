<div class="rscodes view">
<h2><?php  echo __('Rscode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rscode['Rscode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($rscode['Rscode']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rscode'), array('action' => 'edit', $rscode['Rscode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rscode'), array('action' => 'delete', $rscode['Rscode']['id']), null, __('Are you sure you want to delete # %s?', $rscode['Rscode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rscodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rscode'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Researches'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Researches'); ?></h3>
	<?php if (!empty($rscode['Research'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Year Id'); ?></th>
		<th><?php echo __('Rstype Id'); ?></th>
		<th><?php echo __('Rscode Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Researcher Id'); ?></th>
		<th><?php echo __('Subresearch Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Qc Rs Type'); ?></th>
		<th><?php echo __('Qc Rs Path'); ?></th>
		<th><?php echo __('Pb Rs Type'); ?></th>
		<th><?php echo __('Pb Rs Path'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rscode['Research'] as $research): ?>
		<tr>
			<td><?php echo $research['id']; ?></td>
			<td><?php echo $research['year_id']; ?></td>
			<td><?php echo $research['rstype_id']; ?></td>
			<td><?php echo $research['rscode_id']; ?></td>
			<td><?php echo $research['organization_id']; ?></td>
			<td><?php echo $research['researcher_id']; ?></td>
			<td><?php echo $research['subresearch_id']; ?></td>
			<td><?php echo $research['name']; ?></td>
			<td><?php echo $research['budget']; ?></td>
			<td><?php echo $research['start_date']; ?></td>
			<td><?php echo $research['end_date']; ?></td>
			<td><?php echo $research['qc_rs_type']; ?></td>
			<td><?php echo $research['qc_rs_path']; ?></td>
			<td><?php echo $research['pb_rs_type']; ?></td>
			<td><?php echo $research['pb_rs_path']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'researches', 'action' => 'view', $research['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'researches', 'action' => 'edit', $research['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'researches', 'action' => 'delete', $research['id']), null, __('Are you sure you want to delete # %s?', $research['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
