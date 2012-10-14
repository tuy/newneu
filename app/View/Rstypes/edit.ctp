<div class="rstypes form">
    <?php echo $this->Form->create('Rstype'); ?>
    <fieldset>
        <legend><?php echo __('แก้ไขชื่อประเภทงานวิจัย'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name',array('label'=>'ชื่อประเภทงานวิจัย'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('กลับ'), array('action' => 'index')); ?></li>
        <!--<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rstype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rstype.id'))); ?></li>

        <li><?php echo $this->Html->link(__('List Researches'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
