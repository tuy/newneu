<div class="years form">
<?php echo $this->Form->create('Year'); ?>
	<fieldset>
		<legend><?php echo __('เพิ่มปีการศึกษา'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'ปีการศึกษา'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('แสดงรายละเอียดปีการศึกษา'), array('action' => 'index')); ?></li>
		<!--<li><?php echo $this->Html->link(__('แสดงรายละเอียดองค์ประกอบ'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('สร้างองค์ประกอบ'), array('controller' => 'elems', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
