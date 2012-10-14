<div class="subfinancials view">
<h2><?php  echo __('Subfinancial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Plan Type'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_plan_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Plan Path'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_plan_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Resource Type'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_resource_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Resource Path'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_resource_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Year Type'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_year_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Year Path'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_year_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Report Type'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_report_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Report Path'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_report_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Analyze Type'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_analyze_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Analyze Path'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_analyze_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Check Type'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_check_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Check Path'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_check_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Follow Type'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_follow_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Follow Path'); ?></dt>
		<dd>
			<?php echo h($subfinancial['Subfinancial']['f_follow_path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subfinancial'), array('action' => 'edit', $subfinancial['Subfinancial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subfinancial'), array('action' => 'delete', $subfinancial['Subfinancial']['id']), null, __('Are you sure you want to delete # %s?', $subfinancial['Subfinancial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subfinancials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subfinancial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financials'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financial'), array('controller' => 'financials', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Financials'); ?></h3>
	<?php if (!empty($subfinancial['Financial'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th><?php echo __('Year Id'); ?></th>
		<th><?php echo __('Subfinancial Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subfinancial['Financial'] as $financial): ?>
		<tr>
			<td><?php echo $financial['id']; ?></td>
			<td><?php echo $financial['organization_id']; ?></td>
			<td><?php echo $financial['year_id']; ?></td>
			<td><?php echo $financial['subfinancial_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'financials', 'action' => 'view', $financial['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'financials', 'action' => 'edit', $financial['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'financials', 'action' => 'delete', $financial['id']), null, __('Are you sure you want to delete # %s?', $financial['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Financial'), array('controller' => 'financials', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
