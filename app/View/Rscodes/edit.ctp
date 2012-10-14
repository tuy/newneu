<div class="rscodes form">
    <?php echo $this->Form->create('Rscode'); ?>
    <fieldset>
        <legend><?php echo __('แก้ไขชื่อประเภทการเผยแพร่'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name',array('label'=>'ชื่อประเภทการเผยแพร่'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('กลัย'), array('action' => 'index')); ?></li>
        
        <!--<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rscode.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rscode.id'))); ?></li>

        <li><?php echo $this->Html->link(__('List Researches'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
