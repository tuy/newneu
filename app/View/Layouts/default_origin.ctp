<?php
    /**
    *
    * PHP 5
    *
    * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
    * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
    *
    * Licensed under The MIT License
    * Redistributions of files must retain the above copyright notice.
    *
    * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
    * @link          http://cakephp.org CakePHP(tm) Project
    * @package       Cake.View.Layouts
    * @since         CakePHP(tm) v 0.10.0.1076
    * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
    */

    $cakeDescription = __d('cake_dev', 'NEU : ระบบฐานข้อมูลกลางเพื่องานประกันคุณภาพ');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset('utf8'); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
            echo $this->Html->meta('icon');

            echo $this->Html->css('cake.generic');

            echo $this->Html->script('jquery-1.8.2.min');
            echo $this->Html->script('app?js=' . rand(1,10));

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
        <script type="text/javascript">
            $('body').ready(function(){
                //displayFile(); 
            });
        </script>
        <style type="text/css">
            .user-info{
                float: right;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1 style="float: left;">NEU : ระบบฐานข้อมูลกลางเพื่องานประกันคุณภาพ</h1>
                <?php if($this->Session->read('User')){ ?>
                    <?php
                        //pr($this->Session->read('User'));
                    ?>
                    <div class="user-info">
                        Welcome <?php echo $this->Session->read('User.User.username'); ?>
                        <a href="/users/logout" style="color: white;">Logout</a>
                    </div>
                    <?php } ?>
            </div>
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
                &copy;NEU, 2012
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
