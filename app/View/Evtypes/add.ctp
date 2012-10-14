<div class="evtypes form">
<?php echo $this->Form->create('Evtype'); ?>
	<fieldset>
		<legend><?php echo __('เพิ่มข้อมูลประเภทกิจกรรม'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'ชื่อประเภทกิจกรรม'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('แสดงข้อมูลประเภทกิจกรรม'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('กลับหน้าหลัก'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
