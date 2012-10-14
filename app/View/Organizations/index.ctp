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
        <p class="lead">Organization</p>
    </div>
</header>
<hr>
<div class="row-fluid">
    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Links</li>
                <li class="active"><?php echo $this->Html->link(__('List Organization'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('New Organization'), array('action' => 'add')); ?></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
    <div class="span10">
        <div class="organizations index">
            <h2><?php echo __('คณะ/หน่วยงาน'); ?></h2>
            <table cellpadding="0" cellspacing="0" class="table table-hover">
                <tr>
                    <th><?php echo $this->Paginator->sort('id','ลำดับที่'); ?></th>
                    <th><?php echo $this->Paginator->sort('code','รหัสคณะ/หน่วยงาน'); ?></th>
                    <th><?php echo $this->Paginator->sort('name','ชื่อคณะ/หน่วยงาน'); ?></th>
                    <th class="actions"><?php echo __('แก้ไข/ลบ'); ?></th>
                </tr>
                <?php
                    foreach ($organizations as $organization): ?>
                    <tr>
                        <td><?php echo h($organization['Organization']['id']); ?>&nbsp;</td>
                        <td><?php echo h($organization['Organization']['code']); ?>&nbsp;</td>
                        <td><?php echo h($organization['Organization']['name']); ?>&nbsp;</td>
                        <td class="actions">
                            <!-- <?php echo $this->Html->link(__('View'), array('action' => 'view', $organization['Organization']['id'])); ?> -->
                            <?php echo $this->Html->link(__('แก้ไข'), array('action' => 'edit', $organization['Organization']['id'])); ?>
                            <?php echo $this->Form->postLink(__('ลบ'), array('action' => 'delete', $organization['Organization']['id']), null, __('คุณต้องการลบคณะ/หน่วยงานใช่หรือไม่', $organization['Organization']['id'])); ?>
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
