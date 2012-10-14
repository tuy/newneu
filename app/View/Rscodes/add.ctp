<div class="rscodes form">
<?php echo $this->Form->create('Rscode'); ?>
	<fieldset>
		<legend><?php echo __('เพิ่มข้อมูลประเภทการเผยแพร่'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'ชื่อประเภทการเผยแพร่'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('แสดงข้อมูลประเภทการเผยแพร่'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        
        
        
		<!--<li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
