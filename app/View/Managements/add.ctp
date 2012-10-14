<div class="managements form">
    <?php echo $this->Form->create('Management',array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('Add Management'); ?></legend>
        <?php
            echo $this->Form->input('organization_id');
            echo $this->Form->input('year_id');
            //echo $this->Form->input('submanagement_id');

            $no ='ไม่มี';
            $yes='มี';
            $legend = 'มีการจัดบริการให้คำปรึกษาทางวิชาการและแนะแนวการใช้ชีวิตให้แก่นักศึกษา';

             echo "<h3>ข้อมูลสนับสนุนตัวบ่งชี้ที่ 7_1</h3>";
            // m_estimate_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_estimate_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_estimate_path', array('type' => 'file'));
            // m_information_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_information_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_information_path', array('type' => 'file'));
            // m_follow_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_follow_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_follow_path', array('type' => 'file'));
            // m_support_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_support_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_support_path', array('type' => 'file'));
            // m_relay_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_relay_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_relay_path', array('type' => 'file'));
            // m_manage_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_manage_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_manage_path', array('type' => 'file'));
            // m_eval_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_eval_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_eval_path', array('type' => 'file'));
            
            echo "<h3>ข้อมูลสนับสนุนตัวบ่งชี้ที่ 7_2</h3>";
            // m_set_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_set_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_set_path', array('type' => 'file'));
            // m_dev_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_dev_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_dev_path', array('type' => 'file'));
            // m_share_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_share_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_share_path', array('type' => 'file'));
            // m_publish_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_publish_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_publish_path', array('type' => 'file'));
            // m_present_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_present_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_present_path', array('type' => 'file'));
            
            echo "<h3>ข้อมูลสนับสนุนตัวบ่งชี้ที่ 7_3</h3>";
            // m_plot_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_plot_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_plot_path', array('type' => 'file'));
            // m_info_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_info_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_info_path', array('type' => 'file'));
            // m_esti_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_esti_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_esti_path', array('type' => 'file'));
            // m_assess_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_assess_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_assess_path', array('type' => 'file'));
            // m_send_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_send_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_send_path', array('type' => 'file'));
            
            echo "<h3>ข้อมูลสนับสนุนตัวบ่งชี้ที่ 7_4</h3>";
            // m_board_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_board_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_board_path', array('type' => 'file'));
            // m_analyze_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_analyze_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_analyze_path', array('type' => 'file'));
            // m_esanalyze_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_esanalyze_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_esanalyze_path', array('type' => 'file'));
            // m_plan_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_plan_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_plan_path', array('type' => 'file'));
            // m_esfollow_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_esfollow_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_esfollow_path', array('type' => 'file'));
            // m_adap_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Submanagement.m_adap_type', $options, $attributes);
            echo $this->Form->input('Submanagement.m_adap_path', array('type' => 'file'));

        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Managements'), array('action' => 'index')); ?></li>
        
        
       <!-- <li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Submanagements'), array('controller' => 'submanagements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Submanagement'), array('controller' => 'submanagements', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
