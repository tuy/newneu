<div class="researches index">
    <h2><?php echo __('องค์ประกอบที่ 4 การวิจัย'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th class="actions"><?php echo __('Action'); ?></th>
            <th><?php echo $this->Paginator->sort('id','ลำดับที่'); ?></th>
            <th><?php echo $this->Paginator->sort('year_id','ปีการศึกษา'); ?></th>
            <th><?php echo $this->Paginator->sort('rstype_id','ประเภทงานวิจัย'); ?></th>
            <th><?php echo $this->Paginator->sort('rscode_id','ประเภทการเผยแพร่'); ?></th>
            <th><?php echo $this->Paginator->sort('organization_id','คณะ/หน่วยงาน'); ?></th>
            <!--<th><?php echo $this->Paginator->sort('subresearch_id'); ?></th>-->
            <th><?php echo $this->Paginator->sort('name','ชื่องานวิจัย'); ?></th>
            <th><?php echo $this->Paginator->sort('budget','งบประมาณ'); ?></th>
            <th><?php echo $this->Paginator->sort('start_date','วัน/เดือน/ปี ที่เริ่ม'); ?></th>
            <th><?php echo $this->Paginator->sort('end_date','วัน/เดือน/ปี สิ้นสุด'); ?></th>
            <th><?php echo $this->Paginator->sort('qc_rs_type','งานวิจัยที่ได้รับรองคุณภาพ'); ?></th>
            <!--<th><?php echo $this->Paginator->sort('qc_rs_path'); ?></th>-->
            <th><?php echo $this->Paginator->sort('pb_rs_type','งานวิจัยที่ได้รับการเผยแพร่'); ?></th>
            <!--<th><?php echo $this->Paginator->sort('pb_rs_path'); ?></th>-->
            <th><?php echo __('ข้อมูลสนับสนุนตัวบ่งชี้'); ?></th>
            <th><?php echo __('หลักฐาน'); ?></th>

        </tr>
        <?php

            $yes = 'มี';
            $no = 'ไม่มี';
            foreach ($researches as $research): ?>
            <tr>
                <td class="actions">
                    <?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $research['Research']['id']), null, __('คุณต้องการลบใช่หรือไม่ ?', $research['Research']['id'])); ?>
                    <!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $research['Research']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $research['Research']['id'])); ?>-->

                </td>
                <td><?php echo h($research['Research']['id']); ?>&nbsp;</td>
                <td><?php echo $research['Year']['name']; ?> </td>
                <td><?php echo $research['Rstype']['name']; ?></td>
                <td> <?php echo $research['Rscode']['name']; ?></td>
                <td><?php echo $research['Organization']['name']; ?></td>
                <!--<td><?php echo $research['Subresearch']['id']; ?> </td>-->
                <td><?php echo h($research['Research']['name']); ?>&nbsp;</td>
                <td><?php echo h($research['Research']['budget']); ?>&nbsp;</td>
                <td><?php echo h($research['Research']['start_date']); ?>&nbsp;</td>
                <td><?php echo h($research['Research']['end_date']); ?>&nbsp;</td>
                <td>
                    <?php

                        $untitled = 'No title';

                        if($research["Research"]["qc_rs_path"] == ""){
                            echo ($research["Research"]["qc_rs_type"] == "" ) ? $untitled : $research["Research"]["qc_rs_type"];
                        }else{
                            echo $this->Form->postLink( ($research["Research"]["qc_rs_type"] == "" ) ? $untitled : $research["Research"]["qc_rs_type"] , 
                            array( 
                            'action' => 'download', 
                            'Research=' . $research['Research']['id'] . '=' . 'qc_rs_path')
                            , null);
                        }
                    ?>
                </td> 
                <td><?php
                        $untitled = 'No title';

                        if($research["Research"]["pb_rs_path"] == ""){
                            echo ($research["Research"]["pb_rs_type"] == "" ) ? $untitled : $research["Research"]["pb_rs_type"];
                        }else{
                            echo $this->Form->postLink( ($research["Research"]["pb_rs_type"] == "" ) ? $untitled : $research["Research"]["pb_rs_type"] , 
                            array( 
                            'action' => 'download', 
                            'Research=' . $research['Research']['id'] . '=' . 'pb_rs_path')
                            , null);
                        }
                ?> </td>
                <td>
                <table>
                    <tr>
                        <td><h2>องค์4_1</h2></td>
                    </tr>
                    <tr>
                        <td>
                            มีระบบกลไกและการบริหารงานวิจับ
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีการบูรณาการงานวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีการพัฒนาศักยภาพด้านงานวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีการจัดสรรงบประมาณของสถาบัน เพื่อเป็นทุนวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีห้องปฏิบัติการวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีห้องสมุดหรือแหล่งค้นคว้า
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีสิ่งอำนวยความสะดวกหรือการรักษาความปลอดภัยในการวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีกิจกรรมที่ส่งเสริมงานวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีการติดตามและประเมิณผลการสนับสนุน
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีการนำผลการประเมินไปปรับปรุง
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีระบบและกลไกเพื่อสร้างงานวิจัย
                        </td>
                    </tr>

                    <tr>
                        <td><h2>องค์4_2</h2></td>
                    </tr>

                    <tr>
                        <td>
                            มีระบบและกลไกสนับสนุนการเผยแพร่งานวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีระบบและกลไกการรวบรวม คัดสรรงานวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีการประชาสัมพันธ์และการเผยแพร่องค์ความรู้จากงานวิจัย
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีการนำผลงานงานวิจัยไปใช้ให้เกิดประโยชน์
                        </td>
                    </tr>
                    <tr>
                        <td>
                            มีระบบและกลไกเพื่อช่วยในการคุ้มครองสิทธ์ของงานวิจัย
                        </td>
                    </tr>

                </table>
                <td width="50">
                    <table>
                        <tr>
                            <td><h2>องค์4_1</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_system_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_system_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_upgrade_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_upgrade_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_dev_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_dev_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_budget_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_budget_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_room_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_room_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_lib_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_lib_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_support_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_support_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_event_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_event_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_follow_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_follow_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_adap_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_adap_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_create_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_create_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td><h2>องค์4_2</h2></td>
                        </tr>

                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_pub_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_pub_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_combine_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_combine_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_ads_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_ads_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_use_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_use_path=' . $research['Subresearch']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($research["Subresearch"]["rs_patent_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'rs_patent_path=' . $research['Subresearch']['id'])
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
        <li><?php echo $this->Html->link(__('เพิ่มข้อมูลงานวิจัย'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('เพิ่มข้อมูลประเภทการเผยแพร่'), array('controller' => 'rscodes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('เพิ่มข้อมูลประเภทงานวิจัย'), array('controller' => 'rstypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('แสดงข้อมูลและหลักฐาน'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 1'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 3'), array('controller' => 'events', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 5'), array('controller' => 'services', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 6'), array('controller' => 'cultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 7'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 8'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 9'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>

        <!--<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rstypes'), array('controller' => 'rstypes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Rscodes'), array('controller' => 'rscodes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('New Researcher'), array('controller' => 'researchers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subresearches'), array('controller' => 'subresearches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subresearch'), array('controller' => 'subresearches', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
