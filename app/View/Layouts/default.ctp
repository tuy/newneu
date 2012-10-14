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
    // pr($_SESSION);
    $title = 'ระบบฐานข้อมูลกลางเพื่องานประกันคุณภาพ มหาวิทยาลัยภาคตะวันออกเฉียงเหนือ';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.css">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }

            /** Paging **/
            .paging {
                background:#fff;
                color: #ccc;
                margin-top: 1em;
                clear:both;
            }
            .paging .current,
            .paging .disabled,
            .paging a {
                text-decoration: none;
                padding: 5px 8px;
                display: inline-block
            }
            .paging > span {
                display: inline-block;
                border: 1px solid #ccc;
                border-left: 0;
            }
            .paging > span:hover {
                background: #efefef;
            }
            .paging .prev {
                border-left: 1px solid #ccc;
                -moz-border-radius: 4px 0 0 4px;
                -webkit-border-radius: 4px 0 0 4px;
                border-radius: 4px 0 0 4px;
            }
            .paging .next {
                -moz-border-radius: 0 4px 4px 0;
                -webkit-border-radius: 0 4px 4px 0;
                border-radius: 0 4px 4px 0;
            }
            .paging .disabled {
                color: #ddd;
            }
            .paging .disabled:hover {
                background: transparent;
            }
            .paging .current {
                background: #efefef;
                color: #c73e14;
            }

            .jumbotron{
                position: relative;
                padding: 40px 0;
                color: white;
                /*        text-align: center;*/
                text-shadow: 0 1px 3px rgba(0, 0, 0, .4), 0 0 30px rgba(0, 0, 0, .075);
                background: #020031;
                background: -moz-linear-gradient(45deg, #020031 0%, #6D3353 100%);
                background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#020031), color-stop(100%,#6D3353));
                background: -webkit-linear-gradient(45deg, #020031 0%,#6D3353 100%);
                background: -o-linear-gradient(45deg, #020031 0%,#6D3353 100%);
                background: -ms-linear-gradient(45deg, #020031 0%,#6D3353 100%);
                background: linear-gradient(45deg, #020031 0%,#6D3353 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#020031', endColorstr='#6d3353',GradientType=1 );
                -webkit-box-shadow: inset 0 3px 7px rgba(0, 0, 0, .2), inset 0 -3px 7px rgba(0, 0, 0, .2);
                -moz-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
                box-shadow: inset 0 3px 7px rgba(0, 0, 0, .2), inset 0 -3px 7px rgba(0, 0, 0, .2);
            }

            .jumbotron::after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url(/img/bs-docs-masthead-pattern.png) repeat center center;
            opacity: .4;
            }
        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
    </head>

    <body>
        <div class="container-fluid">
            <?php
                echo $content_for_layout;
            ?>
            <footer>
                <p>©NEU, 2012</p>
            </footer>
        </div> <!-- /container -->

        <?php //echo $this->element('sql_dump'); ?>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="/css/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $("body").ready(function(){
               $(':submit').addClass('btn btn-primary');
               $('table label').css('display','inline-block'); 
            });
        </script>
    </body>
</html>
