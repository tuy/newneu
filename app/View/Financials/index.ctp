<div class="financials index">
    <h2><?php echo __('Financials'); ?></h2>
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
            foreach ($financials as $financial): ?>
            <tr>
                <td class="actions">
                    <!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $financial['Financial']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financial['Financial']['id'])); ?>-->
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financial['Financial']['id']), null, __('Are you sure you want to delete # %s?', $financial['Financial']['id'])); ?>
                </td>
                <td><?php echo h($financial['Financial']['id']); ?>&nbsp;</td>
                <td><?php echo ($financial['Organization']['name']); ?></td>
                <td><?php echo ($financial['Year']['name']); ?>	</td>
                <td>
                    <table>
                        <tr>
                            <td><h2>องค์8_1</h2></td>
                        </tr>
                        <tr>
                            <td>
                                มีการจัดบริการให้คำปรึกษาทางวิชาการและแนะแนวการใช้ชีวิตให้แก่นักศึกษา
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการจัดบริการข่าวสารที่เป็นประโยชน์ต่อนักศึกษา
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการจัดกิจกรรมเพื่อพัฒนาประสบการณ์ทางวิชาการและวิชาชีพแก่นักศึกษา
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการจัดบริการข่าวสาร์ต่อศิษย์เก่า
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการจัดบริการข่าวสาร์ที่เป็นประโยชน์ต่อศิษย์เก่า
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการประเมินคุุณภาพของการให้บริการ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการนำผลการประเมินคุณภาพของการบริการมาใช้เป็นข้อมูลในการพัฒนาการจัดบริการที่สนองความต้องการของนักศึกษา
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="50">
                    <table>
                        <tr>
                            <td><h2>องค์8_1</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($financial["Subfinancial"]["f_plan_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'f_plan_path=' . $financial['Subfinancial']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($financial["Subfinancial"]["f_resource_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'f_resource_path=' . $financial['Subfinancial']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($financial["Subfinancial"]["f_year_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'f_year_path=' . $financial['Subfinancial']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($financial["Subfinancial"]["f_report_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'f_report_path=' . $financial['Subfinancial']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($financial["Subfinancial"]["f_analyze_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'f_analyze_path=' . $financial['Subfinancial']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($financial["Subfinancial"]["f_check_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'f_check_path=' . $financial['Subfinancial']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($financial["Subfinancial"]["f_follow_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'f_follow_path=' . $financial['Subfinancial']['id'])
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
        <li><?php echo $this->Html->link(__('New Financial'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 1'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 3'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 4'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 5'), array('controller' => 'services', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 6'), array('controller' => 'cultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 7'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 9'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>




        <!--<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subfinancials'), array('controller' => 'subfinancials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subfinancial'), array('controller' => 'subfinancials', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
