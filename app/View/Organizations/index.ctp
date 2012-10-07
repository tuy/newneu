<div class="organizations index">
	<h2><?php echo __('คณะ/หน่วยงาน'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','ลำดับที่'); ?></th>
			<th><?php echo $this->Paginator->sort('code','รหัสคณะ/หน่วยงาน'); ?></th>
			<th><?php echo $this->Paginator->sort('name','ชื่อคณะ/หน่วยงาน'); ?></th>
			<th class="actions"><?php echo __('แก้ไข/ลบ'); ?></th>
	</tr>
	<?php
	foreach ($organizations as $organization): ?>
	<tr>
		<td><?php echo h($organization['Organization']['id']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['code']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['name']); ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('View'), array('action' => 'view', $organization['Organization']['id'])); ?> -->
			<?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $organization['Organization']['id'])); ?>
			<?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $organization['Organization']['id']), null, __('คุณต้องการลบคณะ/หน่วยงานใช่หรือไม่', $organization['Organization']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('เพิ่มคณะ/หน่วยงาน'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('แสดงข้อมูลแผนการดำเนินงาน'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('controller' => 'elems', 'action' => 'index')); ?> </li>-->
	</ul>
</div>
