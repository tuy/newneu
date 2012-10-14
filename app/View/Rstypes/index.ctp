<div class="rstypes index">
	<h2><?php echo __('ข้อมูลประเภทงานวิจัย'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','รหัสประเภท'); ?></th>
			<th><?php echo $this->Paginator->sort('name','ชื่อประเภทงานวิจัย'); ?></th>
			<th class="actions"><?php echo __('แก้ไข/ลบ'); ?></th>
	</tr>
	<?php
	foreach ($rstypes as $rstype): ?>
	<tr>
		<td><?php echo h($rstype['Rstype']['id']); ?>&nbsp;</td>
		<td><?php echo h($rstype['Rstype']['name']); ?>&nbsp;</td>
		<td class="actions">
			<!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $rstype['Rstype']['id'])); ?>-->
			<?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $rstype['Rstype']['id'])); ?>
			<?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $rstype['Rstype']['id']), null, __('คุณต้องการลบประเภทงานวิจัยลำดับที่# %s ? ใช่หรือไม่', $rstype['Rstype']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('เพิ่มข้อมูลประเภทงานวิจัย'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
