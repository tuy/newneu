<div class="subqasystems view">
<h2><?php  echo __('Subqasystem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa System Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_system_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa System Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_system_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Policy Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_policy_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Policy Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_policy_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Indicator Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_indicator_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Indicator Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_indicator_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Operate Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_operate_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Operate Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_operate_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Result Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_result_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Result Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_result_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Info Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_info_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Info Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_info_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Invo Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_invo_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Invo Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_invo_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Exchange Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_exchange_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Exchange Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_exchange_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Dev Type'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_dev_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qa Dev Path'); ?></dt>
		<dd>
			<?php echo h($subqasystem['Subqasystem']['qa_dev_path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subqasystem'), array('action' => 'edit', $subqasystem['Subqasystem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subqasystem'), array('action' => 'delete', $subqasystem['Subqasystem']['id']), null, __('Are you sure you want to delete # %s?', $subqasystem['Subqasystem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subqasystems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subqasystem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Qasystems'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qasystem'), array('controller' => 'qasystems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Qasystems'); ?></h3>
	<?php if (!empty($subqasystem['Qasystem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Year Id'); ?></th>
		<th><?php echo __('Subqasystem Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subqasystem['Qasystem'] as $qasystem): ?>
		<tr>
			<td><?php echo $qasystem['id']; ?></td>
			<td><?php echo $qasystem['organization_id']; ?></td>
			<td><?php echo $qasystem['year_id']; ?></td>
			<td><?php echo $qasystem['subqasystem_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'qasystems', 'action' => 'view', $qasystem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'qasystems', 'action' => 'edit', $qasystem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'qasystems', 'action' => 'delete', $qasystem['id']), null, __('Are you sure you want to delete # %s?', $qasystem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Qasystem'), array('controller' => 'qasystems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
