<div class="cultures index">
    <h2><?php echo __('องค์ประกอบที่ 6 การทำนุบำรุงศิลปะและวัฒนธรรม'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th class="actions"><?php echo __('Actions'); ?></th>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('organization_id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('start_date'); ?></th>
            <th><?php echo $this->Paginator->sort('end_date'); ?></th>
            <th><?php echo $this->Paginator->sort('location'); ?></th>
            <th><?php echo $this->Paginator->sort('attend'); ?></th>
            <th><?php echo $this->Paginator->sort('total_name'); ?></th>
            <!--<th><?php echo $this->Paginator->sort('total_path'); ?></th>-->
            <!--<th><?php echo $this->Paginator->sort('subcultures_id'); ?></th>-->
            <th><?php echo __('ข้อมูลสนับสนุนตัวบ่งชี้'); ?></th>
            <th><?php echo __('หลักฐาน'); ?></th>

        </tr>
        <?php
            foreach ($cultures as $culture): ?>
            <tr>
            <td class="actions">
                <!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $culture['Culture']['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $culture['Culture']['id'])); ?>-->
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $culture['Culture']['id']), null, __('Are you sure you want to delete # %s?', $culture['Culture']['id'])); ?>
            </td>
            <td><?php echo h($culture['Culture']['id']); ?>&nbsp;</td>
            <td><?php echo h($culture['Organization']['name']); ?>  </td> 
            <td><?php echo h($culture['Culture']['name']); ?>&nbsp;</td>
            <td><?php echo h($culture['Culture']['start_date']); ?>&nbsp;</td>
            <td><?php echo h($culture['Culture']['end_date']); ?>&nbsp;</td>
            <td><?php echo h($culture['Culture']['location']); ?>&nbsp;</td>
            <td><?php echo h($culture['Culture']['attend']); ?>&nbsp;</td>

            <td>
                <?php
                    $untitled = 'No title';

                    if($culture["Culture"]["total_path"] == ""){
                        echo ($culture["Culture"]["total_name"] == "" ) ? $untitled : $culture["Culture"]["total_name"];
                    }else{
                        echo $this->Form->postLink( ($culture["Culture"]["total_name"] == "" ) ? $untitled : $culture["Culture"]["total_name"] ,                           array( 
                        'action' => 'download', 
                        'Culture=' . $culture['Culture']['id'] . 'total_path')
                        , null);
                    }
                ?>
            </td>
            <!--<td><?php echo h($culture['Subcultures']['id']); ?>  </td>-->
            <td>
            <table>
                <tr>
                    <td><h2>องค์6_1</h2></td>
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
            </table>
            <td width="50">
            <table>
                <tr>
                    <td><h2>องค์6_1</h2></td>
                </tr>
                <tr>
                    <td>
                        <?php

                            $untitled = 'No title';

                            if($culture["Subculture"]["c_system_type"] == 0){
                                echo 'ไม่มี';
                            }else{
                                echo $this->Form->postLink( 'มี' , 
                                array( 
                                'action' => 'download', 
                                'Subculture=' . $culture['Subculture']['id'] . '=' . 'c_system_path')
                                , null);
                            }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php

                            $untitled = 'No title';

                            if($culture["Subculture"]["c_upgrade_type"] == 0){
                                echo 'ไม่มี';
                            }else{
                                echo $this->Form->postLink( 'มี' , 
                                array( 
                                'action' => 'download', 
                                'Subculture=' . $culture['Subculture']['id'] . '=' . 'c_upgrade_path')
                                , null);
                            }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php

                            $untitled = 'No title';

                            if($culture["Subculture"]["c_publish_type"] == 0){
                                echo 'ไม่มี';
                            }else{
                                echo $this->Form->postLink( 'มี' , 
                                array( 
                                'action' => 'download', 
                                'Subculture=' . $culture['Subculture']['id'] . '=' . 'c_publish_path')
                                , null);
                            }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php

                            $untitled = 'No title';

                            if($culture["Subculture"]["c_estimate_type"] == 0){
                                echo 'ไม่มี';
                            }else{
                                echo $this->Form->postLink( 'มี' , 
                                array( 
                                'action' => 'download', 
                                'Subculture=' . $culture['Subculture']['id'] . '=' . 'c_estimate_path')
                                , null);
                            }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php

                            $untitled = 'No title';

                            if($culture["Subculture"]["c_apply_type"] == 0){
                                echo 'ไม่มี';
                            }else{
                                echo $this->Form->postLink( 'มี' , 
                                array( 
                                'action' => 'download', 
                                'Subculture=' . $culture['Subculture']['id'] . '=' . 'c_apply_path')
                                , null);
                            }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php

                            $untitled = 'No title';

                            if($culture["Subculture"]["c_standard_type"] == 0){
                                echo 'ไม่มี';
                            }else{
                                echo $this->Form->postLink( 'มี' , 
                                array( 
                                'action' => 'download', 
                                'Subculture=' . $culture['Subculture']['id'] . '=' . 'c_standard_path')
                                , null);
                            }
                        ?>

                    </td>
                </tr>
            </table>
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
        <li><?php echo $this->Html->link(__('New Culture'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 1'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 3'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 4'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 5'), array('controller' => 'services', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 7'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 8'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 9'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>



        <!-- <li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subcultures'), array('controller' => 'subcultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subcultures'), array('controller' => 'subcultures', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
