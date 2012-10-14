<div class="events form">
    <?php echo $this->Form->create('Event',array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('เพิ่มข้อมูลกิจกรรม'); ?></legend>
        <?php        
            echo $this->Form->input('name',array('label'=>'ชื่อกิจกรรม'));
            echo $this->Form->input('location',array('label'=>'สถานที่จัดกิจกรรม'));
            echo $this->Form->input('start_date',array('label'=>'วัน/เดิอน/ปี เริ่มกิจกรรม','dateFormat' => 'DMY'));
            echo $this->Form->input('end_date',array('label'=>'วัน/เดิอน/ปี สิ้นสุดกิจกรรม','dateFormat' => 'DMY'));
            echo $this->Form->input('attend',array('label'=>'จำนวนผู้เข้าร่วม'));
            echo $this->Form->input('budget',array('label'=>'งบประมาณ'));
            echo $this->Form->input('evtype_id',array('label'=>'ประเภทกิจกรรม'));
            echo $this->Form->input('indic_one',array('label'=>'ตัวชี้วัดที่ 1'));
            echo $this->Form->input('indic_one_r',array('label'=>'ผลตัวชี้วัดที่1'));
            echo $this->Form->input('indic_two',array('label'=>'ตัวชี้วัดที่ 2'));
            echo $this->Form->input('indic_two_r',array('label'=>'ผลตัวชี้วัดที 2'));
            echo $this->Form->input('indic_three',array('label'=>'ตัวชี้วัดที่ 3'));
            echo $this->Form->input('indic_three_r',array('label'=>'ผลตัวชี้วัดที่ 3'));
            echo $this->Form->input('organization_id',array('label'=>'คณะ/หน่วยงาน'));
            echo $this->Form->input('elem_id',array('label'=>'แผนการดำเนินงาน'));

            $no ='ไม่มี';
            $yes='มี';
            $legend = 'มีการจัดบริการให้คำปรึกษาทางวิชาการและแนะแนวการใช้ชีวิตให้แก่นักศึกษา';
            $legend1 = ' มีการจัดบริการข่าวสารที่เป็นประโยชน์ต่อนักศึกษา';
            $legend2 = ' มีการจัดกิจกรรมเพื่อพัฒนาประสบการณ์ทางวิชาการและวิชาชีพแก่นักศึกษา';
            $legend3 = 'มีการจัดบริการข่าวสาร์ต่อศิษย์เก่า';
            $legend4 = 'มีการจัดบริการข่าวสาร์ที่เป็นประโยชน์ต่อศิษย์เก่า';
            $legend5 = 'มีการประเมินคุุณภาพของการให้บริการ';
            $legend6 = 'มีการนำผลการประเมินคุณภาพของการบริการมาใช้เป็นข้อมูลในการพัฒนาการจัดบริการที่สนองความต้องการของนักศึกษา';
            $legend7 = 'สถาบันจัดทำแผนการจัดกิจกรรมพัฒนานักศึกษาที่ส่งเสริมผลการเรียนรู้ตามกรอบมาตรฐานคุุณวุฒิระดับอุดมศึกษาแห่งชาติทุกด้าน';
            $legend8 = 'มีกิจกรรมให้ความรู้และทักษะการประกันคุณภาพแก่นักศึกษา';
            $legend9 = 'มีการสนับสนุนให้นักศึกษาสร้างเครือข่ายพัฒนาคุณภาพภายในสถาบัน';
            $legend10 = 'มีการประเมินความสำเร็จตามวัตถุประสงค์ของแผนการจัดกิจกรรมพัฒนานักศึกษา';
            $legend11 = 'มีการนำผลการประเมินไปปรับปรุงเพื่อพัฒนานักศึกษา';



            // Stu_service_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Consult.stu_service_type', $options, $attributes);
            echo $this->Form->input('Consult.stu_service_path', array('type' => 'file'));

            // Stu_new_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend1,'default' => '0');
            echo $this->Form->radio('Consult.stu_news_type', $options, $attributes);
            echo $this->Form->input('Consult.stu_news_path', array('type' => 'file'));

            // Stu_event_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend2,'default' => '0');
            echo $this->Form->radio('Consult.stu_event_type', $options, $attributes);
            echo $this->Form->input('Consult.stu_event_path', array('type' => 'file'));

            // Old_service_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend3,'default' => '0');
            echo $this->Form->radio('Consult.old_service_type', $options, $attributes);
            echo $this->Form->input('Consult.old_service_path', array('type' => 'file'));


            // Old_news_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend4,'default' => '0');
            echo $this->Form->radio('Consult.old_news_type', $options, $attributes);
            echo $this->Form->input('Consult.old_news_path', array('type' => 'file'));


            // Result_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend5,'default' => '0');
            echo $this->Form->radio('Consult.result_type', $options, $attributes);
            echo $this->Form->input('Consult.result_path', array('type' => 'file'));


            // Result_stu_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend6,'default' => '0');
            echo $this->Form->radio('Consult.result_stu_type', $options, $attributes);
            echo $this->Form->input('Consult.result_stu_path', array('type' => 'file'));

            echo "<h2>3_2</h2>";

            // Event_plan_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend7,'default' => '0');
            echo $this->Form->radio('Consult.event_plan_type', $options, $attributes);
            echo $this->Form->input('Consult.event_plan_path', array('type' => 'file'));

            // Event_k_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend8,'default' => '0');
            echo $this->Form->radio('Consult.event_k_type', $options, $attributes);
            echo $this->Form->input('Consult.event_k_path', array('type' => 'file'));

            // Support_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend9,'default' => '0');
            echo $this->Form->radio('Consult.support_type', $options, $attributes);
            echo $this->Form->input('Consult.support_path', array('type' => 'file'));

            // Success_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend10,'default' => '0');
            echo $this->Form->radio('Consult.success_type', $options, $attributes);
            echo $this->Form->input('Consult.success_path', array('type' => 'file'));

            // Update_type
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend11,'default' => '0');
            echo $this->Form->radio('Consult.update_type', $options, $attributes);
            echo $this->Form->input('Consult.update_path', array('type' => 'file'));

            // Checkboxl
            echo $this->Form->checkbox('Consult.stu_use_one', array('hiddenField' => true));
            echo $this->Html->tag('p', 'กิจกรรมวิชาการที่ส่งเสริมคุณลักษณะบัณฑิตที่พึงประสงค์');

            echo $this->Form->checkbox('Consult.stu_use_two', array('hiddenField' => true));
            echo $this->Html->tag('p', 'กิจกรรมกีฬาหรือการส่งเสริมสุขภาพ');

            echo $this->Form->checkbox('Consult.stu_use_three', array('hiddenField' => true));
            echo $this->Html->tag('p', 'กิจกรรมบำเพ็ญประโยชน์หรือรักษาสิ่งแวดล้อม');

            echo $this->Form->checkbox('Consult.stu_use_four', array('hiddenField' => true));
            echo $this->Html->tag('p', 'กิจกรรมเสริมสร้างคุณธรรมและจริยธรรม');

            echo $this->Form->checkbox('Consult.stu_use_five', array('hiddenField' => true));
            echo $this->Html->tag('p', 'กิจกรรมส่งเสริมศิลปะและวัฒนธรรม');

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('กลับหน้าแรก'), array('action' => 'index')); ?></li>
        
        
        
        <!--<li><?php echo $this->Html->link(__('List Evtypes'), array('controller' => 'evtypes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Evtype'), array('controller' => 'evtypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Elems'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Elem'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Consults'), array('controller' => 'consults', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Consult'), array('controller' => 'consults', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
