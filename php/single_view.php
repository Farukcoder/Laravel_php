<?php
require_once 'deshboard_part/header.php';
require_once 'deshboard_part/left_menu.php';

require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$query = "SELECT * FROM contact where id=$user_id";
$result = mysqli_query($dbconnect, $query);
$after_assoc = mysqli_fetch_assoc($result);
?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="limiter">
                    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                        <div class="wrap-login100">
                <span class="login100-form-logo">
                    <i class="zmdi zmdi-landscape"></i>
                </span>

                            <span class="login100-form-title p-b-34 p-t-27">
                    Contact Us
                </span>

                            <div class="wrap-input100 validate-input">
                                <b>Name:</b> <?php echo $after_assoc['fname']; ?>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <b>Email:</b> <?php echo $after_assoc['email']; ?>
                            </div>

                            <div class="wrap-input100 validate-input">
                                <b>Mobile:</b> <?php echo $after_assoc['mobile']; ?>
                            </div>

                            <div class="wrap-input100 validate-input">
                                <b>Massage:</b><?php echo $after_assoc['massage']; ?>
                            </div>
                            <div class="wrap-input100 validate-input">
                                <b>Photo: </b><img src="image/<?php echo $after_assoc['photo'];?>" alt="" width="200" height="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->

<?php
require_once 'deshboard_part/footer.php';
?>
