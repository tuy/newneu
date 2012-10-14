<div class="financials form">
    <?php echo $this->Form->create('Financial',array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('Add Financial'); ?></legend>
        <?php
            echo $this->Form->input('organization_id',array('type' => 'hidden','value'=> 9));
            echo "NEU";
            echo $this->Form->input('year_id');
            //echo $this->Form->input('subfinancial_id');

            $no ='ไม่มี';
            $yes='มี';
            $legend = 'มีการจัดบริการให้คำปรึกษาทางวิชาการและแนะแนวการใช้ชีวิตให้แก่นักศึกษา';

            // f_plan_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subfinancial.f_plan_type', $options, $attributes);
            echo $this->Form->input('Subfinancial.f_plan_path', array('type' => 'file'));
            
            // f_resource_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subfinancial.f_resource_type', $options, $attributes);
            echo $this->Form->input('Subfinancial.f_resource_path', array('type' => 'file'));

            // f_resource_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subfinancial.f_year_type', $options, $attributes);
            echo $this->Form->input('Subfinancial.f_year_path', array('type' => 'file'));
            
            // f_report_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subfinancial.f_report_type', $options, $attributes);
            echo $this->Form->input('Subfinancial.f_report_path', array('type' => 'file'));
            
            // f_analyze_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subfinancial.f_analyze_type', $options, $attributes);
            echo $this->Form->input('Subfinancial.f_analyze_path', array('type' => 'file'));
            
            // f_check_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subfinancial.f_check_type', $options, $attributes);
            echo $this->Form->input('Subfinancial.f_check_path', array('type' => 'file'));
            
            // f_follow_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subfinancial.f_follow_type', $options, $attributes);
            echo $this->Form->input('Subfinancial.f_follow_path', array('type' => 'file'));
            
           
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Financials'), array('action' => 'index')); ?></li>
        
        
        
        <!--<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subfinancials'), array('controller' => 'subfinancials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subfinancial'), array('controller' => 'subfinancials', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
