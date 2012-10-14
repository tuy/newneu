<div class="cultures form">
    <?php echo $this->Form->create('Culture',array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('Add Culture'); ?></legend>
        <?php
            echo $this->Form->input('organization_id');
            //echo $this->Form->input('subcultures_id');
            echo $this->Form->input('name');
            echo $this->Form->input('start_date');
            echo $this->Form->input('end_date');
            echo $this->Form->input('location');
            echo $this->Form->input('attend');
            echo $this->Form->input('total_name');
            echo $this->Form->input('total_path',array('type' => 'file'));


            $no ='ไม่มี';
            $yes='มี';
            $legend = 'มีระบบกลไกและการบริหารงานวิจับ';
            $legend1 = ' มีการบูรณาการงานวิจัย';
            $legend2 = ' มีการพัฒนาศักยภาพด้านงานวิจัย';
            $legend3 = 'มีการจัดสรรงบประมาณของสถาบัน เพื่อเป็นทุนวิจัย';
            $legend4 = 'มีห้องปฏิบัติการวิจัย';
            $legend5 = 'มีห้องสมุดหรือแหล่งค้นคว้า';


            // Sub Culture
            echo"<h2>ข้อมูลสนับสนุนตัวบ่งชี้ องค์6_1</h2>";

            // c_system_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subculture.c_system_type', $options, $attributes);
            echo $this->Form->input('Subculture.c_system_path', array('type' => 'file'));

            // c_upgrade_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subculture.c_upgrade_type', $options, $attributes);
            echo $this->Form->input('Subculture.c_upgrade_path', array('type' => 'file'));

            // c_publish_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subculture.c_publish_type', $options, $attributes);
            echo $this->Form->input('Subculture.c_publish_path', array('type' => 'file'));

            // c_estimate_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subculture.c_estimate_type', $options, $attributes);
            echo $this->Form->input('Subculture.c_estimate_path', array('type' => 'file'));

            // c_apply_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subculture.c_apply_type', $options, $attributes);
            echo $this->Form->input('Subculture.c_apply_path', array('type' => 'file'));

            // c_standard_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subculture.c_standard_type', $options, $attributes);
            echo $this->Form->input('Subculture.c_standard_path', array('type' => 'file'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Cultures'), array('action' => 'index')); ?></li>


        <!--<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subcultures'), array('controller' => 'subcultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subcultures'), array('controller' => 'subcultures', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
