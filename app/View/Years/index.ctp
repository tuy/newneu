<div class="years index">
	<h2><?php echo __('ปีการศึกษา'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','ลำดับ'); ?></th>
			<th><?php echo $this->Paginator->sort('name','ปีการศึกษา'); ?></th>
			<th class="actions"><?php echo __('แก้ไข/ลบ'); ?></th>
	</tr>
	<?php
	foreach ($years as $year): ?>
	<tr>
		<td><?php echo h($year['Year']['id']); ?>&nbsp;</td>
		<td><?php echo h($year['Year']['name']); ?>&nbsp;</td>
		<td class="actions">
			<!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $year['Year']['id'])); ?>-->
			<?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $year['Year']['id'])); ?>
			<?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $year['Year']['id']), null, __('คุณต้องการที่จะลบปีการศึกษาใช่หรือไม่', $year['Year']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('เพิ่มปีการศึกษา'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('แสดงข้อมูลแผนการดำเนินงาน'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elems', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
