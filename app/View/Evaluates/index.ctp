<div class="evaluates index">
	<h2><?php echo __('Evaluates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($evaluates as $evaluate): ?>
	<tr>
		<td><?php echo h($evaluate['Evaluate']['id']); ?>&nbsp;</td>
		<td><?php echo h($evaluate['Evaluate']['path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evaluate['Evaluate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evaluate['Evaluate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evaluate['Evaluate']['id']), null, __('Are you sure you want to delete # %s?', $evaluate['Evaluate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evaluate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
	</ul>
</div>
