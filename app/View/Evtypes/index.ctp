<div class="evtypes index">
	<h2><?php echo __('รหัสประเภท'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','รหัสประเภท'); ?></th>
			<th><?php echo $this->Paginator->sort('name','ชื่อประเภท'); ?></th>
			<th class="actions"><?php echo __('แก้ไข/ลบ'); ?></th>
	</tr>
	<?php
	foreach ($evtypes as $evtype): ?>
	<tr>
		<td><?php echo h($evtype['Evtype']['id']); ?>&nbsp;</td>
		<td><?php echo h($evtype['Evtype']['name']); ?>&nbsp;</td>
		<td class="actions">
			<!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $evtype['Evtype']['id'])); ?>-->
			<?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $evtype['Evtype']['id'])); ?>
			<?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $evtype['Evtype']['id']), null, __('คุณต้องการลบปรเภทกิจกรรมใช่หรือไม่', $evtype['Evtype']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('เพิ่มข้อมูลประเภทกิจกรรม'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
