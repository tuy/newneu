<div class="events index">
    <h2><?php echo __('องค์ประกอบที่ 3 กิจกรรมพัฒนานักศึกษา'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>            
            <th class="actions"><?php echo __('ลบ'); ?></th>
            <th><?php echo $this->Paginator->sort('id','รหัสกิจกรรม'); ?></th>
            <th><?php echo $this->Paginator->sort('evtype_id','ประเภทกิจกรรม'); ?></th>
            <th><?php echo $this->Paginator->sort('organization_id','คณะ/หน่วยงาน'); ?></th>
            <th><?php echo $this->Paginator->sort('elem_id','แผนการดำเนินงาน'); ?></th>
            <th><?php echo $this->Paginator->sort('name','ชื่อกิจกรรม'); ?></th>
            <th><?php echo $this->Paginator->sort('location','สถานที่จัดกิจกรรม'); ?></th>
            <th><?php echo $this->Paginator->sort('start_date','วัน/เดิอน/ปี เริ่มกิจกรรม'); ?></th>
            <th><?php echo $this->Paginator->sort('end_date','วัน/เดิอน/ปี สิ้นสุดกิจกรรม'); ?></th>
            <th><?php echo $this->Paginator->sort('attend','จำนวนผู้เข้าร่วม'); ?></th>
            <th><?php echo $this->Paginator->sort('budget','งบประมาณ'); ?></th>
            <th><?php echo $this->Paginator->sort('indic_one','ตัวชี้วัดที่ 1'); ?></th>
            <th><?php echo $this->Paginator->sort('indic_one_r','ผลตัวชี้วัดที่ 1'); ?></th>
            <th><?php echo $this->Paginator->sort('indic_two','ตัวชี้วัดที่ 2'); ?></th>
            <th><?php echo $this->Paginator->sort('indic_two_r','ผลตัวชี้วัดที่ 2'); ?></th>
            <th><?php echo $this->Paginator->sort('indic_three','ตัวชี้วัดที่ 3'); ?></th>
            <th><?php echo $this->Paginator->sort('indic_three_r','ผลตัวชี้วัดที่ 3'); ?></th>
            <th><?php echo __('ข้อมูลสนับสนุนตัวบ่งชี้'); ?></th>
            <th><?php echo __('หลักฐาน'); ?></th>
        </tr>
        <?php
            $yes = 'มี';
            $no = 'ไม่มี';

            foreach ($events as $event): ?>
            <tr>
                <td class="actions">
                    <!-- <?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
                    <?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $event['Event']['id'])); ?> -->
                    <?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $event['Event']['id']), null, __('คุณต้องการลลกิจกรรมใช่หรือไม่', $event['Event']['id'])); ?>
                </td>
                <td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
                <td><?php echo $event['Evtype']['name']; ?></td>
                <td><?php echo $event['Organization']['name']; ?> </td>
                <td><?php echo $event['Elem']['name']; ?> </td>
                <td><?php echo h($event['Event']['name']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['location']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['start_date']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['end_date']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['attend']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['budget']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['indic_one']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['indic_one_r']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['indic_two']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['indic_two_r']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['indic_three']); ?>&nbsp;</td>
                <td><?php echo h($event['Event']['indic_three_r']); ?>&nbsp;</td>
                <td>
                    <table>
                        <tr>
                            <td><h2>องค์3_1</h2></td>
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
                        <tr>
                            <td><h2>องค์3_2</h2></td>
                        </tr>
                        <tr>
                            <td>
                                สถาบันจัดทำแผนการจัดกิจกรรมพัฒนานักศึกษาที่ส่งเสริมผลการเรียนรู้ตามกรอบมาตรฐานคุุณวุฒิระดับอุดมศึกษาแห่งชาติทุกด้าน
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีกิจกรรมให้ความรู้และทักษะการประกันคุณภาพแก่นักศึกษา
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการสนับสนุนให้นักศึกษาสร้างเครือข่ายพัฒนาคุณภาพภายในสถาบัน
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการประเมินความสำเร็จตามวัตถุประสงค์ของแผนการจัดกิจกรรมพัฒนานักศึกษา
                            </td>
                        </tr>
                        <tr>
                            <td>
                                มีการนำผลการประเมินไปปรับปรุงเพื่อพัฒนานักศึกษา
                            </td>
                        </tr>
                        <tr>
                            <td>
                                กิจกรรมวิชาการที่ส่งเสริมคุณลักษณะบัณฑิตที่พึงประสงค์
                            </td>
                        </tr>
                        <tr>
                            <td>
                                กิจกรรมกีฬาหรือการส่งเสริมสุขภาพ
                            </td>
                        </tr>
                        <tr>
                            <td>
                                กิจกรรมบำเพ็ญประโยชน์หรือรักษาสิ่งแวดล้อม
                            </td>
                        </tr>
                        <tr>
                            <td>
                                กิจกรรมเสริมสร้างคุณธรรมและจริยธรรม
                            </td>
                        </tr>
                        <tr>
                            <td>
                                กิจกรรมส่งเสริมศิลปะและวัฒนธรรม
                            </td>
                        </tr>

                    </table>
                </td>
                <td width="50">
                    <table>
                        <tr>
                            <td><h2>องค์3_1</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["stu_service_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'stu_service_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["stu_news_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'stu_news_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["stu_event_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'stu_event_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["old_service_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'old_service_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["old_news_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'old_news_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["result_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'result_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["result_stu_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'result_stu_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><h2>องค์3_2</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["event_plan_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'event_plan_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["event_k_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'event_k_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr> 
                        <tr>
                        <td>
                            <?php
                                if($event["Consult"]["support_type"] == 0){
                                    echo $no;
                                }else{
                                    echo $this->Form->postLink( $yes , 
                                    array( 
                                    'action' => 'download', 
                                    'support_path=' . $event['Consult']['id'])
                                    , null);
                                }
                            ?>
                        </td>
                        <tr>
                            <td>
                                <?php
                                    if($event["Consult"]["success_type"] == 0){
                                        echo $no;
                                    }else{
                                        echo $this->Form->postLink( $yes , 
                                        array( 
                                        'action' => 'download', 
                                        'success_path=' . $event['Consult']['id'])
                                        , null);
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <?php
                                if($event["Consult"]["update_type"] == 0){
                                    echo $no;
                                }else{
                                    echo $this->Form->postLink( $yes , 
                                    array( 
                                    'action' => 'download', 
                                    'update_path=' . $event['Consult']['id'])
                                    , null);
                                }
                            ?>
                        </td>
                        <tr>
                            <td>
                                <?php
                                    echo ($event["Consult"]["stu_use_one"] == 1 ) ? $yes : $no;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    echo ($event["Consult"]["stu_use_two"] == 1 ) ? $yes : $no;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    echo ($event["Consult"]["stu_use_three"] == 1 ) ? $yes : $no;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    echo ($event["Consult"]["stu_use_four"] == 1 ) ? $yes : $no;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    echo ($event["Consult"]["stu_use_five"] == 1 ) ? $yes : $no;
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
        <li><?php echo $this->Html->link(__('เพิ่มข้อมูลกิจกรรม'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('เพิ่มข้อมูลประเภทกิจกรรม'), array('controller' => 'evtypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 1'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 4'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 5'), array('controller' => 'services', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 6'), array('controller' => 'cultures', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 7'), array('controller' => 'managements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 8'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('องค์ประกอบที่ 9'), array('controller' => 'qasystems', 'action' => 'index')); ?> </li>
        
        
        <!--<li><?php echo $this->Html->link(__('แสดงข้อมูลรหัสประเภท'), array('controller' => 'evtypes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Elems'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Elem'), array('controller' => 'elems', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Consults'), array('controller' => 'consults', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Consult'), array('controller' => 'consults', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
