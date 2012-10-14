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
        <p class="lead">Edit new plan</p>
    </div>
</header>
<hr>
<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Links</li>                
                <li ><?php echo $this->Html->link(__('แสดงข้อมูลและหลักฐาน'), array('controller' => 'elems', 'action' => 'index')); ?> </li>
                <li class="active"><?php echo $this->Html->link(__('เพิ่มข้อมูลแผนการดำเนินงาน'), array('action' => 'add')); ?></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <div class="span10">
        <div class="elems form">
            <?php echo $this->Form->create('Elem', array( 'enctype' => 'multipart/form-data' )); ?>
            <fieldset>
                <legend><?php echo __('เพิ่มข้อมูลแผนการดำเนินงาน'); ?></legend>
                <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('organization_id',array('label'=>'คณะ/หน่วยงาน'));
                    echo $this->Form->input('year_id',array('label'=>'ปีการศึกษา'));
                    echo $this->Form->input('name',array('label'=>'ชื่อแผนการดำเนินงาน'));
                    echo $this->Form->input('path',array('type' => 'file','label' => false));
                    echo $this->Form->input('date',array('label'=>'วันที่สภาอนุมัติ'));

                    $no ='ไม่มี';
                    $yes='มี';
                ?>
                <h2>xxx</h2>
                <table class="table table-striped">
                    <tr>
                        <td>มีการถ่ายทอดแผนกลยุทธ์ระดับสถาบันไปสู่ทุกหน่วยงานภายใน</td>
                        <td>
                            <?php                    
                                $options = array('0' => $no, '1' => $yes);
                                $attributes = array('legend' => false,'default' => '0');
                                echo $this->Form->input('Elem.relay_id',array('type' => 'hidden'));
                                echo $this->Form->radio('Relay.type', $options, $attributes);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Form->input('Relay.path', array('type' => 'file','label' => false));
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>มีกระบวนการแปลงแผนกลยุทธ์เป็นแผนปฏิบัติการประจำปีครบ 4 พันธกิจ คือด้านการเรียนการสอน การวิจัย การบริการทางวิชาการ และการทำนุบำรุงศิลปะและวัฒนธรรม</td>
                        <td>
                            <?php                    
                                $options = array('0' => $no, '1' => $yes);
                                $attributes = array('legend' => false,'default' => '0');
                                echo $this->Form->input('Elem.action_id',array('type' => 'hidden'));
                                echo $this->Form->radio('Action.type', $options, $attributes);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Form->input('Action.path', array('type' => 'file','label' => false));
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>มีการประเมินผลการดำเนินงานตามตัวบ่งชี้ของแผนกลยุทธ์</td>
                        <td>
                            <?php                    
                                $options = array('0' => $no, '1' => $yes);
                                $attributes = array('legend' => false,'default' => '0');
                                echo $this->Form->input('Elem.evaluate_id',array('type' => 'hidden'));
                                echo $this->Form->radio('Evaluate.type', $options, $attributes);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Form->input('Evaluate.path', array('type' => 'file','label' => false));
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>มีตัวบ่งชี้ของแผนกลยุทธ์ แผนปฏิบัติการประจำปี</td>
                        <td>
                            <?php                    
                                $options = array('0' => $no, '1' => $yes);
                                $attributes = array('legend' => false,'default' => '0');
                                echo $this->Form->input('Elem.indicator_id',array('type' => 'hidden'));
                                echo $this->Form->radio('Indicator.type', $options, $attributes);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Form->input('Indicator.path', array('type' => 'file','label' => false));
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>มีการดำเนินงานตามแผนปฏิบัติการประจำปีครบ 4 พันธกิจ</td>
                        <td>
                            <?php                    
                                $options = array('0' => $no, '1' => $yes);
                                $attributes = array('legend' => false,'default' => '0');
                                echo $this->Form->input('Elem.operation_id',array('type' => 'hidden'));
                                echo $this->Form->radio('Operation.type', $options, $attributes);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Form->input('Operation.path', array('type' => 'file','label' => false));
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>มีการติดตามผลการดำเนินงานตามตัวบ่งชี้ของแผนปฏิบัติการประจำปี</td>
                        <td>
                            <?php                    
                                $options = array('0' => $no, '1' => $yes);
                                $attributes = array('legend' => false,'default' => '0');
                                echo $this->Form->input('Elem.report_id',array('type' => 'hidden'));
                                echo $this->Form->radio('Report.type', $options, $attributes);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Form->input('Report.path', array('type' => 'file','label' => false));
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>มีการนำผลการพิจารณา ข้อคิดเห็น และข้อเสนอแนะของสภาสถาบันไปปรับปรุงแผนกลยุทธ์และแผนปฏิบัติการประจำปี</td>
                        <td>
                            <?php                    
                                $options = array('0' => $no, '1' => $yes);
                                $attributes = array('legend' => false,'default' => '0');
                                echo $this->Form->input('Elem.suggestion_id',array('type' => 'hidden'));
                                echo $this->Form->radio('Suggestion.type', $options, $attributes);
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $this->Form->input('Suggestion.path', array('type' => 'file','label' => false));
                            ?>
                        </td>
                    </tr>

                </table>
            </fieldset>
            <?php echo $this->Form->end(__('บันทึก')); ?>
        </div>
    </div>
</div>