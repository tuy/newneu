<div class="elems index">
    <h2><?php echo __('องค์ประกอบที่ 1 แผนการดำเนินงาน'); ?></h2>
    <?php echo $this->Form->create('Elem', array( 'action' => 'index')); ?>
    <?php 
        echo $this->Form->input('organization_id', array("label" => "คณะ / หน่วยงาน"));
        echo $this->Form->input('year_id', array("label" => 'ปีการศึกษา'));
    ?>
    <?php echo $this->Form->end(__('ค้นหา')); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <!--  <th><?php echo $this->Paginator->sort('id'); ?></th>            
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('year_id'); ?></th>
            <th><?php echo $this->Paginator->sort('date'); ?></th>-->            
            <th class="actions"><?php echo __("หมวดคำสั่ง"); ?></th>
            <th><?php echo __('ลำดับ'); ?></th>
            <th><?php echo __('ชื่อแผนการดำเนินงาน'); ?></th>
            <th><?php echo __('ปีการศึกษา'); ?></th>
            <th><?php echo __('วันที่สภาอนุมัติ'); ?></th>
            <th><?php echo __('ข้อมูลสนับสนุนตัวบ่งชี้'); ?></th>
            <th><?php echo __('หลักฐาน'); ?></th>

        </tr>
        <?php foreach ($elems as $elem): 
                $yes = 'มี';
                $no = 'ไม่มี';
                $untitled = 'ไม่ได้ตั้งชื่อ';
            ?>
            <tr>
                <td class="actions">
                    <!--<?php echo $this->Html->link(__('แสดงรายการ'), array('action' => 'view', $elem['Elem']['id'])); ?>-->
                    <?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $elem['Elem']['id'])); ?>
                    <?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $elem['Elem']['id']), null, __('คุณต้องการลบแผนการดำเนินงานใช่หรือไม่', $elem['Elem']['id'])); ?>
                </td>                
                <td><?php echo h($elem['Elem']['id']); ?>&nbsp;</td>
                <td>
                    <?php
                        if($elem["Elem"]["path"] == ""){
                            echo ($elem["Elem"]["name"] == "" ) ? $untitled : $elem["Elem"]["name"];
                        }else{
                            echo $this->Form->postLink( ($elem["Elem"]["name"] == "" ) ? $untitled : $elem["Elem"]["name"] , 
                            array( 
                            'action' => 'download', 
                            'Elem=' . $elem['Elem']['id'])
                            , null);
                        }
                    ?>
                </td>                
                <td>
                    <?php echo $elem['Year']['name']; ?>
                </td>

                <td><?php echo h($elem['Elem']['date']); ?>&nbsp;</td>
                <td>
                    <table>
                        <tr>
                            <td>
                                มีการถ่ายทอดแผนกลยุทธ์ระดับสถาบันไปสู่ทุกหน่วยงานภายใน
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีกระบวนการแปลงแผนกลยุทธ์เป็นแผนปฏิบัติการประจำปีครบ 4 พันธกิจ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีตัวบ่งชี้ของแผนกลยุทธ์ แผนปฏิบัติการประจำปี
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการดำเนินงานตามแผนปฏิบัติการประจำปีครบ 4 พันธกิจ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการติดตามผลการดำเนินงานตามตัวบ่งชี้ของแผนปฏิบัติการประจำปี
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการประเมินผลการดำเนินงานตามตัวบ่งชี้ของแผนกลยุทธ์
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการนำผลการพิจารณา ข้อคิดเห็น และข้อเสนอแนะของสภาสถาบันไปปรับปรุงแผนกลยุทธ์และแผนปฏิบัติการประจำปี
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="50">
                    <table>
                        <tr>
                            <td>
                                <?php
                                    if($elem["Relay"]["type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'Relay=' . $elem['Relay']['id'])
                                        , null);
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($elem["Action"]["type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'Action=' . $elem['Action']['id'])
                                        , null);
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($elem["Indicator"]["type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'Indicator=' . $elem['Indicator']['id'])
                                        , null);
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($elem["Operation"]["type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'Operation=' . $elem['Operation']['id'])
                                        , null);
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($elem["Report"]["type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'Report=' . $elem['Report']['id'])
                                        , null);
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($elem["Evaluate"]["type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'Evaluate=' . $elem['Evaluate']['id'])
                                        , null);
                                } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($elem["Suggestion"]["type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'Suggestion=' . $elem['Suggestion']['id'])
                                        , null);
                                } ?>
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
        <li><?php echo $this->Html->link(__('เพิ่มข้อมูลแผนการดำเนินงาน'), array('action' => 'add')); ?></li>
        <!--<li><?php echo $this->Html->link(__('แสดงรายละเอียดคณะ/หน่วยงาน'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>-->
        <li><?php echo $this->Html->link(__('เพิ่มคณะ/หน่วยงาน'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('แสดงรายละเอียดปีการศึกษา'), array('controller' => 'years', 'action' => 'index')); ?> </li>-->
        <li><?php echo $this->Html->link(__('เพิ่มปีการศึกษา'), array('controller' => 'years', 'action' => 'add')); ?> </li>

        <!--<li><?php echo $this->Html->link(__('List Relays'), array('controller' => 'relays', 'action' => 'index')); ?> </li>
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
