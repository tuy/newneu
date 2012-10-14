<style type="text/css">
    .front-bg{
        position: fixed;
        width: 200%;
        height: 200%;
        left: -50%;
        background: black;
        top:0;
        z-index: -1;
    }
    .front-bg img{
        display: block;
        margin: auto;
        min-width: 50%;
        min-height: 50%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    .welcome-home{
        padding: 180px 0;
        color: #000;
        text-shadow: 0 1px 2px #fff;
    }
</style>

<?php
    $title = 'ระบบฐานข้อมูลกลางเพื่องานประกันคุณภาพ มหาวิทยาลัยภาคตะวันออกเฉียงเหนือ';
    $_placeholder_u = 'ชื่อผู้ใช้';
    $_placeholder_pwd = 'รหัสผ่าน';
    $_placeholder_pwd = 'รหัสผ่าน';
    $_btn_sign_in = 'เข้าสู่ระบบ';
    //pr($_SESSION);
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a class="brand" href="#"><i class="icon-home"></i></a></li>
                    <?php if($this->Session->read('User.User.role') == 'admin'){ ?>
                        <li><a href="/organizations/">หน่วยงาน</a></li>
                        <li><a href="/users/">ผู้ใช้งาน</a></li>
                        <li><a href="/years/">ปีการศึกษา</a></li>
                        <li><a href="/manuals/">เอกสารคู่มือ</a></li>
                        <?php } ?>
                    <?php if($this->Session->read('User.User.role') == 'user'){ ?>    
                        <li><a href="/elems/">องค์ประกอบที่ 1</a></li>
                        <li><a href="/">องค์ประกอบที่ 2</a></li>
                        <li><a href="/events">องค์ประกอบที่ 3</a></li>
                        <li><a href="/researches">องค์ประกอบที่ 4</a></li>
                        <li><a href="/services">องค์ประกอบที่ 5</a></li>
                        <li><a href="/cultures">องค์ประกอบที่ 6</a></li>
                        <li><a href="/managements">องค์ประกอบที่ 7</a></li>
                        <li><a href="/financials">องค์ประกอบที่ 8</a></li>
                        <li><a href="/qasystems">องค์ประกอบที่ 9</a></li>
                        <?php } ?>
                        
                        <?php if($this->Session->read('User.User.role') == 'mod'){ ?>
                        <li><a href="#about">ข้อมูลหลักฐานโดยสรุป</a></li>
                        <?php } ?>
                </ul>

                <?php if($this->Session->read('User')){ ?>

                    <p class="navbar-text pull-right">
                        Logged in as <?php echo $this->Session->read('User.User.username'); ?> | <a href="/users/logout" style="color: white;">Logout</a>
                    </p>
                    <?php
                    }else{
                    ?>                        
                    <form class="navbar-form pull-right" action="/users/login/" method="post">
                        <input class="span2" type="text" placeholder="<?php echo $_placeholder_u; ?>" name="data[User][username]">
                        <input class="span2" type="password" placeholder="<?php echo $_placeholder_pwd; ?>" name="data[User][password]">
                        <button type="submit" class="btn btn-primary"><?php echo $_btn_sign_in; ?></button>
                    </form>
                    <?php
                    }
                ?>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="welcome-home">
    <h1>Welcome</h1>
    <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
</div>
<div class="front-bg">
    <img class="front-image" src="/img/home/<?php echo rand(2,4) ?>.jpg">
</div>
