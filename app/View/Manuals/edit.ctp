<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li ><a class="brand" href="/mains/index"><i class="icon-home icon-white"></i></a></li>
                    <li ><a href="/organizations/">หน่วยงาน</a></li>
                    <li ><a href="/users/">ผู้ใช้งาน</a></li>
                    <li ><a href="/years/">ปีการศึกษา</a></li>
                    <li class="active"><a href="/manuals/">เอกสารคู่มือ</a></li>
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
        <h1>Manual Management</h1>
        <p class="lead">Edit Manual</p>
    </div>
</header>
<hr>
<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Links</li>
                <li><?php echo $this->Html->link(__('List Manuals'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Manual.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Manual.id'))); ?></li>
                
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <div class="span10">
        <div class="manuals form">
            <?php echo $this->Form->create('Manual', array( 'enctype' => 'multipart/form-data' )); ?>
            <fieldset>
                <legend><?php echo __('Edit Manual'); ?></legend>
                <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('name');
                    echo $this->Form->input('path',array('type' => 'file'));
                ?>
            </fieldset>
            <?php echo $this->Form->end(__('Submit')); ?>
        </div>
    </div>
</div>
