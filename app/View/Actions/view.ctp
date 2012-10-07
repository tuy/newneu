<div class="actions view">
<h2><?php  echo __('Action'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($action['Action']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($action['Action']['path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Action'), array('action' => 'edit', $action['Action']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Action'), array('action' => 'delete', $action['Action']['id']), null, __('Are you sure you want to delete # %s?', $action['Action']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Elements'); ?></h3>
	<?php if (!empty($action['Element'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Year Id'); ?></th>
		<th><?php echo __('Plan Name'); ?></th>
		<th><?php echo __('Plan Date'); ?></th>
		<th><?php echo __('Relay Id'); ?></th>
		<th><?php echo __('Action Id'); ?></th>
		<th><?php echo __('Indicator Id'); ?></th>
		<th><?php echo __('Operation Id'); ?></th>
		<th><?php echo __('Report Id'); ?></th>
		<th><?php echo __('Evaluate Id'); ?></th>
		<th><?php echo __('Suggestion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($action['Element'] as $element): ?>
		<tr>
			<td><?php echo $element['id']; ?></td>
			<td><?php echo $element['organization_id']; ?></td>
			<td><?php echo $element['year_id']; ?></td>
			<td><?php echo $element['plan_name']; ?></td>
			<td><?php echo $element['plan_date']; ?></td>
			<td><?php echo $element['relay_id']; ?></td>
			<td><?php echo $element['action_id']; ?></td>
			<td><?php echo $element['indicator_id']; ?></td>
			<td><?php echo $element['operation_id']; ?></td>
			<td><?php echo $element['report_id']; ?></td>
			<td><?php echo $element['evaluate_id']; ?></td>
			<td><?php echo $element['suggestion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'elems', 'action' => 'view', $element['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'elems', 'action' => 'edit', $element['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'elems', 'action' => 'delete', $element['id']), null, __('Are you sure you want to delete # %s?', $element['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
