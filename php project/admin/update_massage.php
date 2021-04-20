<?php
// require 'session_check.php';
require_once "templete/header.php";
require_once "templete/left_menu.php";
require '../database/db.php';
$user_id = $_GET['id'];
$query = "SELECT * FROM contact where id=$user_id";
$result = mysqli_query($dbconnect, $query);
$after_assoc = mysqli_fetch_assoc($result);


?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="limiter">
                    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                        <div class="wrap-login100">
                            <form class="login100-form validate-form" action="update.php" method="POST" enctype="multipart/form-data">
                                <span class="login100-form-logo">
                                    <i class="zmdi zmdi-landscape"></i>
                                </span>

                                <span class="login100-form-title p-b-34 p-t-27">
                                    Contact us
                                </span>
                                <div class="wrap-input100 validate-input" data-validate="Enter Your Name">
                                    <input class="form-control" type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>">
                                    <input class="form-control" type="text" name="fname" value="<?php echo $after_assoc['fname']; ?>">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Enter Email">
                                    <input class="form-control" type="email" name="email" value="<?php echo $after_assoc['email']; ?>">
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                </div>

                                <!-- <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div> -->

                                <div class="wrap-input100 validate-input" data-validate="Enter Mobile Number">
                                    <input class="form-control" type="number" name="mobile" value="<?php echo $after_assoc['mobile']; ?>">
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Enter Your Massage">
                                    <textarea class="form-control" type="text" name="massage"><?php echo $after_assoc['massage']; ?></textarea>
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Enter Your Massage">
                                    <input class="form-control" type="file" name="photo">
                                    <img src="image/<?php echo $after_assoc['photo'] ?>" alt="" width="150" height="150">
                                </div>

                                <div class="">
                                    <a href="update"></a>
                                    <button class="update">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!--main content end-->

<?php
require_once "templete/footer.php";
?>