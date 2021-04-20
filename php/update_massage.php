<?php
require 'session_check.php';
require 'db.php';
$user_id = $_GET['id'];
$query = "SELECT * FROM contact where id=$user_id";
$result = mysqli_query($dbconnect, $query);
$after_assoc = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

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
                        <input class="input100" type="hidden" name="id" value="<?php echo $after_assoc['id'];?>">
                        <input class="input100" type="text" name="fname" value="<?php echo $after_assoc['fname'];?>">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Email">
                        <input class="input100" type="email" name="email" value="<?php echo $after_assoc['email'];?>">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <!-- <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div> -->

                    <div class="wrap-input100 validate-input" data-validate="Enter Mobile Number">
                        <input class="input100" type="number" name="mobile" value="<?php echo $after_assoc['mobile'];?>">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Your Massage">
                        <textarea class="input100" type="text" name="massage"><?php echo $after_assoc['massage'];?></textarea>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Your Massage">
                        <input type="file" name="photo">
                       <img src="image/<?php echo $after_assoc['photo']?>"  alt="" width="150" height="150">
                    </div>

                    <div class="">
                    <a href="update"></a>
                        <button class="login100-form-btn">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>