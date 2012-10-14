<div class="services index">
    <h2><?php echo __('Services'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>            
            <th class="actions"><?php echo __('Actions'); ?></th>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('organization_id'); ?></th>
            <th><?php echo $this->Paginator->sort('stype_id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('location'); ?></th>
            <th><?php echo $this->Paginator->sort('start_date'); ?></th>
            <th><?php echo $this->Paginator->sort('end_date'); ?></th>
            <th><?php echo $this->Paginator->sort('ab_name'); ?></th>
            <!--<th><?php echo $this->Paginator->sort('ab_name_path'); ?></th>-->
            <!--<th><?php echo $this->Paginator->sort('subservice_id'); ?></th>-->
            <th><?php echo __('ข้อมูลสนับสนุนตัวบ่งชี้'); ?></th>
            <th><?php echo __('หลักฐาน'); ?></th>

        </tr>

        <?php
            foreach ($services as $service):

                //pr($service);
            ?>
            <tr>
                <td class="actions">
                <?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $service['Service']['id']), null, __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
                <!--<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $service['Service']['id'])); ?></td>-->
                <td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
                <td><?php echo h($service['Organization']['name']); ?></td>
                <td><?php echo h($service['Stype']['name']); ?></td>
                <td><?php echo h($service['Service']['name']); ?>&nbsp;</td>
                <td><?php echo h($service['Service']['location']); ?>&nbsp;</td>
                <td><?php echo h($service['Service']['start_date']); ?>&nbsp;</td>
                <td><?php echo h($service['Service']['end_date']); ?>&nbsp;</td>
                <!--<td><?php echo h($service['Subservice']['id']); ?></td>-->
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Service"]["ab_name_path"] == ""){
                            echo ($service["Service"]["ab_name"] == "" ) ? $untitled : $service["Service"]["ab_name"];
                        }else{
                            echo $this->Form->postLink( ($service["Service"]["ab_name"] == "" ) ? $untitled : $service["Service"]["ab_name"] , 
                            array( 
                            'action' => 'download', 
                            'Service=' . $service['Service']['id'] . 'ab_name_path')
                            , null);
                        }
                    ?>

                </td>
                <td>
                <table>
                <tr>
                    <td><h2>องค์5_1</h2></td>
                </tr>
                <tr>
                    <td>
                        มีระบบกลไกและการบริหารงานวิจับ
                    </td>
                </tr>
                <tr>
                    <td>
                        มีระบบกลไกและการบริหารงานวิจับ
                    </td>
                </tr>
                <tr>
                    <td>
                        มีระบบกลไกและการบริหารงานวิจับ
                    </td>
                </tr>
                <tr>
                    <td>
                        มีระบบกลไกและการบริหารงานวิจับ
                    </td>
                </tr>
                <td><h2>องค์5_2</h2></td>
            </tr>
            <tr>
                <td>
                    มีระบบกลไกและการบริหารงานวิจับ
                </td>
            </tr>
            <tr>
                <td>
                    มีระบบกลไกและการบริหารงานวิจับ
                </td>
            </tr>
            <tr>
                <td>
                    มีระบบกลไกและการบริหารงานวิจับ
                </td>
            </tr>
            <tr>
                <td>
                    มีระบบกลไกและการบริหารงานวิจับ
                </td>
            </tr>
            <tr>
                <td>
                    มีระบบกลไกและการบริหารงานวิจับ
                </td>
            </tr>
        </table>
        <td width="50">
            <table>
            <tr>
                <td><h2>องค์5_1</h2></td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_system_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink( 'มี' , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_system_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_stu_upgrade_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink( 'มี' , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_stu_upgrade_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_rs_upgrade_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink( 'มี' , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_rs_upgrade_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_eval_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink( 'มี' , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_eval_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>

            <td><h2>องค์5_2</h2></td>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_search_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink('มี', 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_search_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_participant_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink('มี' , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_participant_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_impact_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink('มี' , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_impact_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_adap_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink('มี'  , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_adap_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($service["Subservice"]["s_relay_type"] == 0){
                            echo 'ไม่มี';
                        }else{
                            echo $this->Form->postLink( 'มี' , 
                            array( 
                            'action' => 'download', 
                            'Subservice=' . $service['Subservice']['id'] . '=' . 's_relay_path')
                            , null);
                        }
                    ?>

                </td>
            </tr>
        </td>
        </table>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
    ?>    </p>

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
        <li><?php echo $this->Html->link(__('New Service'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('New Stype'), array('controller' => 'stypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 1'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 3'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 4'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 6'), array('controller' => 'cultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 7'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 8'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 9'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>


        <!--<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Stypes'), array('controller' => 'stypes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subservices'), array('controller' => 'subservices', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subservice'), array('controller' => 'subservices', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
