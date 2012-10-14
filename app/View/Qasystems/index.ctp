<div class="qasystems index">
    <h2><?php echo __('Qasystems'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th class="actions"><?php echo __('Actions'); ?></th>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('organization_id'); ?></th>
            <th><?php echo $this->Paginator->sort('year_id'); ?></th>
            <th><?php echo __('ข้อมูลสนับสนุนตัวบ่งชี้'); ?></th>
            <th><?php echo __('หลักฐาน'); ?></th>
        </tr>
        <?php

            $yes = 'มี';
            $no = 'ไม่มี';
            foreach ($qasystems as $qasystem): ?>
            <tr>
                <td class="actions">
                    <!-- <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $qasystem['Qasystem']['id'])); ?>-->
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $qasystem['Qasystem']['id']), null, __('Are you sure you want to delete # %s?', $qasystem['Qasystem']['id'])); ?>
                </td>
                <td><?php echo h($qasystem['Qasystem']['id']); ?>&nbsp;</td>
                <td><?php echo ($qasystem['Organization']['name']); ?></td>
                <td><?php echo ($qasystem['Year']['name']); ?></td>
                <td>
                    <table>
                        <tr>
                            <td><h2>องค์9_1</h2></td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                        </tr>
                        <tr>
                            <td>
                                7
                            </td>
                        </tr>
                        <tr>
                            <td>
                                8
                            </td>
                        </tr>
                        <tr>
                            <td>
                                9
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="50">
                    <table>
                        <tr>
                            <td><h2>องค์9_1</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_system_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_system_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_policy_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_policy_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_indicator_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_indicator_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_operate_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_operate_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_result_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_result_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_info_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_info_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_invo_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_invo_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_exchange_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_exchange_path=' . $qasystem['Subqasystem']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($qasystem["Subqasystem"]["qa_dev_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'qa_dev_path=' . $qasystem['Subqasystem']['id'])
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
        <li><?php echo $this->Html->link(__('New Qasystem'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 1'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 3'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 4'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 5'), array('controller' => 'services', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 6'), array('controller' => 'cultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 7'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 8'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
        
        <!--<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subqasystems'), array('controller' => 'subqasystems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subqasystem'), array('controller' => 'subqasystems', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
