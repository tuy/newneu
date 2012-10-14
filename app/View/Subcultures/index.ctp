<div class="subcultures index">
	<h2><?php echo __('Subcultures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('c_system_type'); ?></th>
			<th><?php echo $this->Paginator->sort('c_system_path'); ?></th>
			<th><?php echo $this->Paginator->sort('c_upgrade_type'); ?></th>
			<th><?php echo $this->Paginator->sort('c_upgrade_path'); ?></th>
			<th><?php echo $this->Paginator->sort('c_publish_type'); ?></th>
			<th><?php echo $this->Paginator->sort('c_publish_path'); ?></th>
			<th><?php echo $this->Paginator->sort('c_estimate_type'); ?></th>
			<th><?php echo $this->Paginator->sort('c_estimate_path'); ?></th>
			<th><?php echo $this->Paginator->sort('c_apply_type'); ?></th>
			<th><?php echo $this->Paginator->sort('c_apply_path'); ?></th>
			<th><?php echo $this->Paginator->sort('c_standard_type'); ?></th>
			<th><?php echo $this->Paginator->sort('c_standard_path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subcultures as $subculture): ?>
	<tr>
		<td><?php echo h($subculture['Subculture']['id']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_system_type']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_system_path']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_upgrade_type']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_upgrade_path']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_publish_type']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_publish_path']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_estimate_type']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_estimate_path']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_apply_type']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_apply_path']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_standard_type']); ?>&nbsp;</td>
		<td><?php echo h($subculture['Subculture']['c_standard_path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subculture['Subculture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subculture['Subculture']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subculture['Subculture']['id']), null, __('Are you sure you want to delete # %s?', $subculture['Subculture']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subculture'), array('action' => 'add')); ?></li>
	</ul>
</div>
