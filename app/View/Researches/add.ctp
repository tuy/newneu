<div class="researches form">
    <?php echo $this->Form->create('Research',array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('เพิ่มข้อมูลการวิจัย'); ?></legend>
        <?php
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
            $legend10 = 'มีระบบและกลไกเพื่อสร้างงานวิจัย';
            ///4_2
            $legend11 = 'มีระบบและกลไกสนับสนุนการเผยแพร่งานวิจัย';
            $legend12 = 'มีระบบและกลไกการรวบรวม คัดสรรงานวิจัย';
            $legend13 = 'มีการประชาสัมพันธ์และการเผยแพร่องค์ความรู้จากงานวิจัย';
            $legend14 = 'มีการนำผลงานงานวิจัยไปใช้ให้เกิดประโยชน์';
            $legend15 = 'มีระบบและกลไกเพื่อช่วยในการคุ้มครองสิทธ์ของงานวิจัย';




            echo $this->Form->input('year_id',array('label'=>'ปีการศึกษา'));
            echo $this->Form->input('rstype_id',array('label'=>'ประเภทงานวิจัย'));
            echo $this->Form->input('rscode_id',array('label'=>'ประเภทการเผยแพร่'));
            echo $this->Form->input('organization_id',array('label'=>'คณะ/หน่วยงาน'));
            echo $this->Form->input('name',array('label'=>'ชื่องานวิจัย'));
            echo $this->Form->input('rs_name_one',array('label'=>'ผู้รับผิดชอบโครงการ 1'));
            echo $this->Form->input('rs_name_two',array('label'=>'ผู้รับผิดชอบโครงการ 2'));
            echo $this->Form->input('rs_name_three',array('label'=>'ผู้รับผิดชอบโครงการ 3'));
            echo $this->Form->input('rs_name_four',array('label'=>'ผู้รับผิดชอบโครงการ 4'));
            echo $this->Form->input('rs_name_five',array('label'=>'ผู้รับผิดชอบโครงการ 5'));
            echo $this->Form->input('budget',array('label'=>'งบประมาณ'));
            echo $this->Form->input('start_date',array('label'=>'วัน/เดือน/ปี ที่เริ่ม','dateFormat' => 'DMY'));
            echo $this->Form->input('end_date',array('label'=>'วัน/เดือน/ปี สิ้นสุด','dateFormat' => 'DMY'));
            echo $this->Form->input('qc_rs_type',array('label'=>'งานวิจัยที่ได้รับรองคุณภาพ'));
            // QC_RS
            echo $this->Form->input('qc_rs_path', array('type' => 'file'));

            //echo $this->Form->input('qc_rs_path');
            echo $this->Form->input('pb_rs_type',array('label'=>'งานวิจับที่ได้รับการเผยแพร่'));

            // PB_RS

            echo $this->Form->input('pb_rs_path', array('type' => 'file'));

            //echo $this->Form->input('pb_rs_path');
            //echo $this->Form->input('subresearches_id');

            // Sub Research
            echo"<h2>ข้อมูลสนับสนุนตัวบ่งชี้ องค์4_1</h2>";


            // rs_system_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_system_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_system_path', array('type' => 'file'));

            // rs_upgrade_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend1,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_upgrade_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_upgrade_path', array('type' => 'file'));

            // rs_dev_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend2,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_dev_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_dev_path', array('type' => 'file'));

            // rs_bugget_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend3,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_budget_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_budget_path', array('type' => 'file'));

            // rs_room_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend4,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_room_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_room_path', array('type' => 'file'));

            // rs_lib_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend5,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_lib_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_lib_path', array('type' => 'file'));

            // rs_support_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend6,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_support_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_support_path', array('type' => 'file'));

            // rs_event_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend1,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_event_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_event_path', array('type' => 'file'));

            // rs_follow_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend8,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_follow_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_follow_path', array('type' => 'file'));

            // rs_adap_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend9,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_adap_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_adap_path', array('type' => 'file'));

            // rs_create_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend10,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_create_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_create_path', array('type' => 'file'));


            echo"<h2>ข้อมูลสนับสนุนตัวบ่งชี้  องค์4_2</h2>";


            // rs_pub_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend11,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_pub_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_pub_path', array('type' => 'file'));

            // rs_combine_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend12,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_combine_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_combine_path', array('type' => 'file'));

            // rs_ads_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend13,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_ads_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_ads_path', array('type' => 'file'));

            // rs_use_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend14,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_use_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_use_path', array('type' => 'file'));

            // rs_patent_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend15,'default' => '0');
            echo $this->Form->radio('Subresearch.rs_patent_type', $options, $attributes);
            echo $this->Form->input('Subresearch.rs_patent_path', array('type' => 'file'));




        ?>
    </fieldset>
    <?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('action' => 'index')); ?></li>








        <!--<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rstypes'), array('controller' => 'rstypes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Rstype'), array('controller' => 'rstypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rscodes'), array('controller' => 'rscodes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Rscode'), array('controller' => 'rscodes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Researchers'), array('controller' => 'researchers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Researcher'), array('controller' => 'researchers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subresearches'), array('controller' => 'subresearches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subresearch'), array('controller' => 'subresearches', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
