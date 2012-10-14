<div class="rscodes index">
	<h2><?php echo __('ข้อมูลประเภทการเผยแพร่'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','รหัสการเผยแพร่'); ?></th>
			<th><?php echo $this->Paginator->sort('name','ชื่อการเผยแพร่'); ?></th>
			<th class="actions"><?php echo __('แก้ไข/ลบ'); ?></th>
	</tr>
	<?php
	foreach ($rscodes as $rscode): ?>
	<tr>
		<td><?php echo h($rscode['Rscode']['id']); ?>&nbsp;</td>
		<td><?php echo h($rscode['Rscode']['name']); ?>&nbsp;</td>
		<td class="actions">          
			<!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $rscode['Rscode']['id'])); ?>-->
			<?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $rscode['Rscode']['id'])); ?>
			<?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $rscode['Rscode']['id']), null, __('คุณต้องการลบประเภทการเผยแพร่ลำดับที่ %s ใช่หรือไม่?', $rscode['Rscode']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('เพิ่มข้อมูลประเภทการเผยแพร่'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
