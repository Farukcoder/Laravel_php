<?php
session_start();
    require '../database/db.php';

    $after_explod = explode('/',$_SERVER['PHP_SELF']);
    $current_page=end($after_explod) ;

?>

<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="image/<?php echo $_SESSION['photo'];?>" class="img-circle" width="80"></a></p>
            <h5 class="centered"><?php echo $_SESSION['name'];?></h5>
            <p class="centered"><?php echo $_SESSION['email'];?></p>
            <li class="active">
                <a class="<?php echo ($current_page=="index.php")? 'active':'' ?>" href="index.php" >
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="massage_list.php">
                    <i class="fa fa-desktop"></i>
                    <span>Contact</span>
                </a>
<!--                <ul class="sub">-->
<!--                    <li><a href="general.html">General</a></li>-->
<!--                    <li><a href="buttons.html">Buttons</a></li>-->
<!--                    <li><a href="panels.html">Panels</a></li>-->
<!--                    <li><a href="font_awesome.html">Font Awesome</a></li>-->
<!--                </ul>-->
            </li>
            <li class="sub-menu">
                <a href="logo.php" class="<?php echo ($current_page=="logo.php")? 'active':'' ?>">
                    <i class="fa fa-cogs"></i>
                    <span>Components</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="slider.php" class="<?php echo ($current_page=="slider.php")? 'active':'' ?>">
                    <i class="fa fa-cogs"></i>
                    <span>Slider</span>
                </a>
            </li>
            <?php if($_SESSION['role']==1){
                ?>
            <li class="">
                <a href="acl.php" class="<?php echo ($current_page=="acl.php")? 'active':'' ?>">
                    <i class="fa fa-user"></i>
                    <span>ACL</span>
                </a>
            </li>
            <?php }?>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->img/ui-sam.jpg