<div class="organizations form">
<?php echo $this->Form->create('Organization'); ?>
	<fieldset>
		<legend><?php echo __('แก้ไขข้อมูลคณะ/หน่วยงาน'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code',array('label'=>'รหัสคณะ/หน่วยงาน'));
		echo $this->Form->input('name',array('label'=>'ชื่อคณะ/หน่วยงาน'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!--<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Organization.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Organization.id'))); ?></li>-->
		<li><?php echo $this->Html->link(__('แสดงข้อมูลคณะ/หน่วยงาน'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('แสดงข้อมูลแผนการดำเนินงาน'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('สร้างองค์ประกอบ'), array('controller' => 'elems', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
