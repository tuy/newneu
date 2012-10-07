<div class="years form">
<?php echo $this->Form->create('Year'); ?>
	<fieldset>
		<legend><?php echo __('แก้ไขปีการศึกษา'); ?></legend>
	<?php
		echo $this->Form->input('id',array('label'=>'ลำดับ'));
		echo $this->Form->input('name',array('label'=>'ปีการศึกษา'));
        	?>
	</fieldset>
<?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!--<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Year.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Year.id'))); ?></li>-->
		<li><?php echo $this->Html->link(__('แสดงข้อมูลปีการศึกษา'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('แสดงข้อมูลแผนการดำเนินงาน'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Element'), array('controller' => 'elems', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
