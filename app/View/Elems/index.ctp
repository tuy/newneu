<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li ><a class="brand" href="/mains/index"><i class="icon-home icon-white"></i></a></li>
                    <li class="active"><a href="/elems/">องค์ประกอบที่ 1</a></li>
                    <li><a href="/">องค์ประกอบที่ 2</a></li>
                    <li><a href="/events">องค์ประกอบที่ 3</a></li>
                    <li><a href="/researches">องค์ประกอบที่ 4</a></li>
                    <li><a href="/services">องค์ประกอบที่ 5</a></li>
                    <li><a href="/cultures">องค์ประกอบที่ 6</a></li>
                    <li><a href="/managements">องค์ประกอบที่ 7</a></li>
                    <li><a href="/financials">องค์ประกอบที่ 8</a></li>
                    <li><a href="/qasystems">องค์ประกอบที่ 9</a></li>
                </ul>

                <?php if($this->Session->read('User')){ ?>

                    <p class="navbar-text pull-right">
                        Logged in as <?php echo $this->Session->read('User.User.username'); ?> | <a href="/users/logout" style="color: white;">Logout</a>
                    </p>
                    <?php
                    }
                ?>                        
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<!-- End Menu -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Plan Management</h1>
        <p class="lead">Plan</p>
    </div>
</header>
<hr>
<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Links</li>                
                <li class="active"><?php echo $this->Html->link(__('แสดงข้อมูลและหลักฐาน'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('เพิ่มข้อมูลแผนการดำเนินงาน'), array('action' => 'add')); ?></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <div class="span10">
        <div class="elems index">
            <h2><?php echo __('องค์ประกอบที่ 1 แผนการดำเนินงาน'); ?></h2>
            <?php echo $this->Form->create('Elem', array( 'action' => 'index')); ?>
            <?php 
                //echo $this->Form->input('organization_id', array("label" => "คณะ / หน่วยงาน"));
                echo $this->Form->input('year_id', array("label" => 'ปีการศึกษา'));
            ?>
            <?php echo $this->Form->end(__('ค้นหา')); ?>
            <table cellpadding="0" cellspacing="0" class="table table-hover">
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
            ?>    </p>

            <div class="paging">
                <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                ?>
            </div>
        </div>
    </div>
</div>