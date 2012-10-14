<div class="qasystems form">
    <?php echo $this->Form->create('Qasystem',array( 'enctype' => 'multipart/form-data' )); ?>
    <fieldset>
        <legend><?php echo __('Add Qasystem'); ?></legend>
        <?php
            echo $this->Form->input('organization_id');
            echo $this->Form->input('year_id');
            //	echo $this->Form->input('subqasystem_id');

            $no ='ไม่มี';
            $yes='มี';
            $legend = 'มีการจัดบริการให้คำปรึกษาทางวิชาการและแนะแนวการใช้ชีวิตให้แก่นักศึกษา';

            // qa_system_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_system_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_system_path', array('type' => 'file'));

             // qa_policy_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_policy_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_policy_path', array('type' => 'file'));

             // qa_indicator_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_indicator_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_indicator_path', array('type' => 'file'));

             // qa_operate_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_operate_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_operate_path', array('type' => 'file'));

             // qa_result_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_result_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_result_path', array('type' => 'file'));

             // qa_info_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_info_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_info_path', array('type' => 'file'));

             // qa_invo_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_invo_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_invo_path', array('type' => 'file'));

             // qa_exchange_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_exchange_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_exchange_path', array('type' => 'file'));

             // qa_dev_type
            $options = array('0' => $no, '1' => $yes);
            $attributes = array('legend' => $legend,'default' => '0');
            echo $this->Form->radio('Subqasystem.qa_dev_type', $options, $attributes);
            echo $this->Form->input('Subqasystem.qa_dev_path', array('type' => 'file'));





        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Qasystems'), array('action' => 'index')); ?></li>
        
        
        
        <!--<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subqasystems'), array('controller' => 'subqasystems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subqasystem'), array('controller' => 'subqasystems', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
