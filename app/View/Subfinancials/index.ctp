<div class="subfinancials index">
	<h2><?php echo __('Subfinancials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('f_plan_type'); ?></th>
			<th><?php echo $this->Paginator->sort('f_plan_path'); ?></th>
			<th><?php echo $this->Paginator->sort('f_resource_type'); ?></th>
			<th><?php echo $this->Paginator->sort('f_resource_path'); ?></th>
			<th><?php echo $this->Paginator->sort('f_year_type'); ?></th>
			<th><?php echo $this->Paginator->sort('f_year_path'); ?></th>
			<th><?php echo $this->Paginator->sort('f_report_type'); ?></th>
			<th><?php echo $this->Paginator->sort('f_report_path'); ?></th>
			<th><?php echo $this->Paginator->sort('f_analyze_type'); ?></th>
			<th><?php echo $this->Paginator->sort('f_analyze_path'); ?></th>
			<th><?php echo $this->Paginator->sort('f_check_type'); ?></th>
			<th><?php echo $this->Paginator->sort('f_check_path'); ?></th>
			<th><?php echo $this->Paginator->sort('f_follow_type'); ?></th>
			<th><?php echo $this->Paginator->sort('f_follow_path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subfinancials as $subfinancial): ?>
	<tr>
		<td><?php echo h($subfinancial['Subfinancial']['id']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_plan_type']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_plan_path']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_resource_type']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_resource_path']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_year_type']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_year_path']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_report_type']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_report_path']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_analyze_type']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_analyze_path']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_check_type']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_check_path']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_follow_type']); ?>&nbsp;</td>
		<td><?php echo h($subfinancial['Subfinancial']['f_follow_path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subfinancial['Subfinancial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subfinancial['Subfinancial']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subfinancial['Subfinancial']['id']), null, __('Are you sure you want to delete # %s?', $subfinancial['Subfinancial']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subfinancial'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Financials'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financial'), array('controller' => 'financials', 'action' => 'add')); ?> </li>
	</ul>
</div>
