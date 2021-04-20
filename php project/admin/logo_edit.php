<?php
require_once "templete/header.php";
require_once "templete/left_menu.php";

require '../database/db.php';

$id= $_GET['id'];
$select_query= "SELECT * FROM logo WHERE id='$id'";
$result = mysqli_query($dbconnect,$select_query);
$after_assoce = mysqli_fetch_assoc($result);
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="container">
                    <form class="form" action="update_logo.php" method="POST" enctype="multipart/form-data">
                        <div class="login-wrap col-sm-6">
                            <input type="hidden" class="form-control" name="id" value="<?=$after_assoce['id']; ?>">
<!--                            <input type="file" class="form-control" name="logo">-->
                            <br>
                            <select name="status" id="" class="form-control" required>
                                <option value="">select status</option>
                                <option value="1" <?php echo $after_assoce['status'] == 1 ? 'selected=""' : '';
                                ?>>Active</option>
                                <option value="0" <?php echo $after_assoce['status'] == 0 ? 'selected=""' : '';
                                ?>>Inactive</option>

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