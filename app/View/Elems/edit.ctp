<div class="elems form">
    <?php echo $this->Form->create('Elem', array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('เพิ่มข้อมูลแผนการดำเนินงาน'); ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('organization_id',array('label'=>'คณะ/หน่วยงาน'));
            echo $this->Form->input('year_id',array('label'=>'ปีการศึกษา'));
            echo $this->Form->input('name',array('label'=>'ชื่อแผนการดำเนินงาน'));
            echo $this->Form->input('path',array('type' => 'file'));
            echo $this->Form->input('date',array('label'=>'วันที่สภาอนุมัติ'));
            
            $no ='ไม่มี';
            $yes='มี';
            
            // Relay
            //echo $this->Form->input('relay_name');
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => 'มีการถ่ายทอดแผนกลยุทธ์ระดับสถาบันไปสู่ทุกหน่วยงานภายใน','default' => '0');
            echo $this->Form->input('Elem.relay_id',array('type' => 'hidden'));
            echo $this->Form->radio('Relay.type', $options, $attributes);
            echo $this->Form->input('Relay.path', array('type' => 'file'));
            
            // Action
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => 'มีกระบวนการแปลงแผนกลยุทธ์เป็นแผนปฏิบัติการประจำปีครบ 4 พันธกิจ','default' => '0');
            echo $this->Form->input('Elem.action_id',array('type' => 'hidden'));
            echo $this->Form->radio('Action.type', $options, $attributes);
            echo $this->Form->input('Action.path', array('type' => 'file'));
            
            // Evaluate
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => 'มีการประเมินผลการดำเนินงานตามตัวบ่งชี้ของแผนกลยุทธ์','default' => '0');
            echo $this->Form->input('Elem.evaluate_id',array('type' => 'hidden'));
            echo $this->Form->radio('Evaluate.type', $options, $attributes);
            echo $this->Form->input('Evaluate.path', array('type' => 'file'));
            
            // Indicator
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => 'มีตัวบ่งชี้ของแผนกลยุทธ์ แผนปฏิบัติการประจำปี','default' => '0');
            echo $this->Form->input('Elem.indicator_id',array('type' => 'hidden'));
            echo $this->Form->radio('Indicator.type', $options, $attributes);
            echo $this->Form->input('Indicator.path', array('type' => 'file'));
            
            // Operation
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => 'มีการดำเนินงานตามแผนปฏิบัติการประจำปีครบ 4 พันธกิจ','default' => '0');
            echo $this->Form->input('Elem.operation_id',array('type' => 'hidden'));
            echo $this->Form->radio('Operation.type', $options, $attributes);
            echo $this->Form->input('Operation.path', array('type' => 'file'));
            
            // Report
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => 'มีการติดตามผลการดำเนินงานตามตัวบ่งชี้ของแผนปฏิบัติการประจำปี','default' => '0');
            echo $this->Form->input('Elem.report_id',array('type' => 'hidden'));
            echo $this->Form->radio('Report.type', $options, $attributes);
            echo $this->Form->input('Report.path', array('type' => 'file'));
            
            // Suggestion
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => 'มีการนำผลการพิจารณา ข้อคิดเห็น และข้อเสนอแนะของสภาสถาบันไปปรับปรุงแผนกลยุทธ์และแผนปฏิบัติการประจำปี','default' => '0');
            echo $this->Form->input('Elem.suggestion_id',array('type' => 'hidden'));
            echo $this->Form->radio('Suggestion.type', $options, $attributes);
            echo $this->Form->input('Suggestion.path', array('type' => 'file'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('บันทึก')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('แสดงข้อมูลแผนการดำเนินงาน'), array('action' => 'index')); ?></li>
        <!--<li><?php echo $this->Html->link(__('แสดงรายละเอียดคณะ/หน่วยงาน'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('เพิ่มคณะ/หน่วยงาน'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('แสดงรายละเอียดปีการศึกษา'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('เพิ่มปีการศึกษา'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Relays'), array('controller' => 'relays', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Relay'), array('controller' => 'relays', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Evaluates'), array('controller' => 'evaluates', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Evaluate'), array('controller' => 'evaluates', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Suggestions'), array('controller' => 'suggestions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Suggestion'), array('controller' => 'suggestions', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
