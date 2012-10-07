<div class="suggestions index">
	<h2><?php echo __('Suggestions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($suggestions as $suggestion): ?>
	<tr>
		<td><?php echo h($suggestion['Suggestion']['id']); ?>&nbsp;</td>
		<td><?php echo h($suggestion['Suggestion']['path']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $suggestion['Suggestion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $suggestion['Suggestion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $suggestion['Suggestion']['id']), null, __('Are you sure you want to delete # %s?', $suggestion['Suggestion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Suggestion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Elements'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
	</ul>
</div>
