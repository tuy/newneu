<div class="evtypes form">
    <?php echo $this->Form->create('Evtype'); ?>
    <fieldset>
        <legend><?php echo __('แก้ไขข้อมูลประเภทกิจกรรม'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('controller' => 'events', 'action' => 'index')); ?> </li>
       <!-- <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evtype.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Evtype.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Evtypes'), array('action' => 'index')); ?></li>

        <li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
