<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li ><a class="brand" href="/mains/index"><i class="icon-home icon-white"></i></a></li>
                    <li><a href="/organizations/">หน่วยงาน</a></li>
                    <li class="active"><a href="/users/">ผู้ใช้งาน</a></li>
                    <li><a href="/years/">ปีการศึกษา</a></li>
                    <li><a href="/manuals/">เอกสารคู่มือ</a></li>
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
        <h1>Users Management</h1>
        <p class="lead">Create new user</p>
    </div>
</header>
<hr>
<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Links</li>
                <li><?php echo $this->Html->link(__('List User'), array('action' => 'index')); ?></li>
                <li class="active"><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <div class="span10">
        <div class="users form">
            <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <?php
                    echo $this->Form->input('organization_id');
                    echo $this->Form->input('username',array('placeholder' => 'username...','div' => array('class' => 'control-group')));
                    echo $this->Form->input('password',array('placeholder' => 'password...'));
                    echo $this->Form->input('role', array(
                    'options' => array('admin' => 'Admin', 'user' => 'User','mod' => 'Mod')
                    ));
                ?>
            </fieldset>
            <?php echo $this->Form->end(__('Create')); ?>
        </div>
    </div>
</div>
