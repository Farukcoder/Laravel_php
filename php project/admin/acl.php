<?php
require_once "templete/header.php";
require_once "templete/left_menu.php";
?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-6">
                <div class="container">
                    <form class="form" action="regsister_post.php" method="POST" enctype="multipart/form-data">
                        <div class="login-wrap">
                            <input type="text" class="form-control" name="username" placeholder="User name">
                            <br>
                            <input type="text" class="form-control" name="email" placeholder="Enter email">
                            <br>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <br>
                            <input type="number" class="form-control" name="mobile" placeholder="Mobile Number">
                            <br>
                            <input type="file" class="form-control" name="photo">

                            <label class="checkbox">
                                <span class="pull-right">
                                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                                </span>
                            </label>
                            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Submit </button>
                        </div>
                    </form>
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