<div class="services form">
    <?php echo $this->Form->create('Service',array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('Add Service'); ?></legend>
        <?php
            echo $this->Form->input('organization_id');
            echo $this->Form->input('stype_id');
            echo $this->Form->input('name');
            echo $this->Form->input('location');
            echo $this->Form->input('start_date');
            echo $this->Form->input('end_date');
            echo $this->Form->input('ab_name');
            echo $this->Form->input('ab_name_path',array('type' => 'file'));


            $no ='ไม่มี';
            $yes='มี';
            $legend = 'มีระบบกลไกและการบริหารงานวิจับ';
            $legend1 = ' มีการบูรณาการงานวิจัย';
            $legend2 = ' มีการพัฒนาศักยภาพด้านงานวิจัย';
            $legend3 = 'มีการจัดสรรงบประมาณของสถาบัน เพื่อเป็นทุนวิจัย';
            $legend4 = 'มีห้องปฏิบัติการวิจัย';
            $legend5 = 'มีห้องสมุดหรือแหล่งค้นคว้า';
            $legend6 = 'มีสิ่งอำนวยความสะดวกหรือการรักษาความปลอดภัยในการวิจัย';
            $legend7 = 'มีกิจกรรมที่ส่งเสริมงานวิจัย';
            $legend8 = 'มีการติดตามและประเมิณผลการสนับสนุน';
            $legend9 = 'มีการนำผลการประเมินไปปรับปรุง';


            // Sub Services
            echo"<h2>ข้อมูลสนับสนุนตัวบ่งชี้ องค์5_1</h2>";

            // s_system_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_system_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_system_path', array('type' => 'file'));

            // s_stu_upgrade_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_stu_upgrade_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_stu_upgrade_path', array('type' => 'file'));

            // s_rs_upgrade_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_rs_upgrade_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_rs_upgrade_path', array('type' => 'file'));

            // s_eval_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_eval_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_eval_path', array('type' => 'file'));


            echo"<h2>ข้อมูลสนับสนุนตัวบ่งชี้ องค์5_2</h2>";

            // s_search_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_search_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_search_path', array('type' => 'file'));

            // s_participant_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_participant_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_participant_path', array('type' => 'file'));

            // s_impact_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_impact_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_impact_path', array('type' => 'file'));

            // s_adap_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_adap_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_adap_path', array('type' => 'file'));

            // s_relay_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subservice.s_relay_type', $options, $attributes);
            echo $this->Form->input('Subservice.s_relay_path', array('type' => 'file'));


        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Services'), array('action' => 'index')); ?></li>


       <!-- <li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Stypes'), array('controller' => 'stypes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Stype'), array('controller' => 'stypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subservices'), array('controller' => 'subservices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subservice'), array('controller' => 'subservices', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
