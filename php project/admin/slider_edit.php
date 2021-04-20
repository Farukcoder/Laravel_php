<?php
require_once "templete/header.php";
require_once "templete/left_menu.php";
require '../database/db.php';

$select_slide = "SELECT * FROM slider";
$result = mysqli_query($dbconnect, $select_slide);
$after_assoc=mysqli_fetch_assoc($result);
//print_r($after_assoc);
//exit();


?>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="container">
                        <form class="form" action="slider_post.php" method="POST" enctype="multipart/form-data">
                            <div class="login-wrap col-sm-6">
                                <label for="slider" class="control-label col-lg-2">Slider:</label>
                                <input type="file" class="form-control" name="photo" value="<?= $after_assoc['photo'];?>">
                                <img src="image/slider/" alt="" height="50"
                                     width="80">
                                <br>
                                <label for="title" class="control-label col-lg-2">Title:</label>
                                <input type="text" class="form-control" name="title">
                                <br>
                                <label for="description" class="control-label col-lg-2">description</label>
                                <textarea type="text" class="form-control" name="description"></textarea>
                                <br>
                                <label for="status" class="control-label col-lg-2">Status</label>
                                <select name="status" id="" class="form-control" required>
                                    <option value="">select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                <br>
                                <button class="btn btn-theme" href="index.html" type="submit"><i class="fa fa-lock"></i> Submit </button>
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