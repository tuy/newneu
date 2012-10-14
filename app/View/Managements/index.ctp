<div class="managements index">
    <h2><?php echo __('Managements'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th class="actions"><?php echo __('Actions'); ?></th>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('organization_id'); ?></th>
            <th><?php echo $this->Paginator->sort('year_id'); ?></th>
            <!--<th><?php echo $this->Paginator->sort('submanagement_id'); ?></th>-->
            <th><?php echo __('ข้อมูลสนับสนุนตัวบ่งชี้'); ?></th>
            <th><?php echo __('หลักฐาน'); ?></th>
        </tr>
        <?php
            $yes = 'มี';
            $no = 'ไม่มี';

            foreach ($managements as $management): ?>
            <tr>
                <td class="actions">
                    <!--<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $management['Management']['id'])); ?>-->
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $management['Management']['id']), null, __('Are you sure you want to delete # %s?', $management['Management']['id'])); ?>
                </td>
                <td><?php echo h($management['Management']['id']); ?>&nbsp;</td>
                <td><?php echo h($management['Organization']['name']); ?></td>
                <td><?php echo ($management['Year']['name']); ?></td>
                <td>
                    <table>
                        <tr>
                            <td><h2>องค์7_1</h2></td>
                        </tr>
                        <tr>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td><h2>องค์7_2</h2></td>
                        </tr>
                        <tr>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td><h2>องค์7_3</h2></td>
                        </tr>
                        <tr>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td><h2>องค์7_4</h2></td>
                        </tr>
                        <tr>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>6</td>
                        </tr>
                    </table>
                </td>
                <td width="50">
                    <table>
                        <tr>
                            <td><h2>องค์7_1</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_estimate_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_estimate_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_information_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_information_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_follow_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_follow_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_support_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_support_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_relay_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_relay_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_manage_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_manage_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_eval_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_eval_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>

                        
                        <tr>
                            <td><h2>องค์7_2</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_set_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_set_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_dev_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_dev_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_share_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_share_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_publish_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_publish_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_present_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_present_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>

                        
                        <tr>
                            <td><h2>องค์7_3</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_plot_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_plot_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_info_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_info_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_esti_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_esti_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_assess_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_assess_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_send_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_send_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><h2>องค์7_4</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_board_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_board_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_analyze_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_analyze_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_esanalyze_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_esanalyze_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_plan_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_plan_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_esfollow_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_esfollow_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($management["Submanagement"]["m_adap_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'm_adap_path=' . $management['Submanagement']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
    ?>	</p>

    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Management'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 1'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 3'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 4'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 5'), array('controller' => 'services', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 6'), array('controller' => 'cultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 8'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 9'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>
        
        
        <!--<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Submanagements'), array('controller' => 'submanagements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Submanagement'), array('controller' => 'submanagements', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
