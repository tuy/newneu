<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li ><a class="brand" href="/mains/index"><i class="icon-home icon-white"></i></a></li>
                    <li class="active"><a href="/organizations/">หน่วยงาน</a></li>
                    <li ><a href="/users/">ผู้ใช้งาน</a></li>
                    <li ><a href="/years/">ปีการศึกษา</a></li>
                    <li ><a href="/manuals/">เอกสารคู่มือ</a></li>
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
        <h1>Organization Management</h1>
        <p class="lead">Create new organization</p>
    </div>
</header>
<hr>
<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Links</li>
                <li class="active"><?php echo $this->Html->link(__('List Organization'), array('action' => 'index')); ?></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <div class="span10">
        <div class="organizations form">
            <?php echo $this->Form->create('Organization'); ?>
            <fieldset>
                <legend><?php echo __('เพิ่มคณะ/หน่วยงาน'); ?></legend>
                <?php
                    echo $this->Form->input('code',array('label'=>'รหัสคณะ/หน่วยงาน'));
                    echo $this->Form->input('name',array('label'=>'ชื่อคณะ/หน่วยงาน'));
                ?>
            </fieldset>
            <?php echo $this->Form->end(__('บันทึก')); ?>
        </div>
    </div>
</div>
