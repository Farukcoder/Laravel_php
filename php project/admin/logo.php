<?php
require_once "templete/header.php";
require_once "templete/left_menu.php";

$select_logo = "SELECT * FROM logo";

$logo = mysqli_query($dbconnect, $select_logo);
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="container">
                    <form class="form" action="logo_post.php" method="POST" enctype="multipart/form-data">
                        <div class="login-wrap col-sm-6">
                            <input type="file" class="form-control" name="logo">
                            <br>
                            <select name="status" id="" class="form-control" required>
                                <option value="">select status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <br>
                            <button class="btn btn-theme" href="index.html" type="submit"><i class="fa fa-lock"></i> Submit </button>
                        </div>
                    </form>
                    <table class="table table-sm table-dark" id="table_id">
                        <thead class="bg-info">

                            <tr>
                                <th scope="col" class="">SL</th>
                                <th scope="col" class="">Photo</th>
                                <th scope="col" class="">Status</th>
                                <th scope="col" class="">Action</th>
                            </tr>
                        </thead>
                        <?php
                        $i=1;
                        foreach($logo as $value){
                            ?>
                        <tbody>
                            <td><?= $i++;?></td>
                            <td><img src="image/logo/<?= $value['logo'];?>" alt="" height="50" width="80"></td>
                            <td>
                                <?php if($value['status']==1){
                                    echo 'Active';
                                }else{
                                    echo 'Inactive';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="logo_edit.php?id=<?= $value['id'];?>" class="btn btn-warning">Edit</a>
                            </td>
                            
                        </tbody>
                        <?php
                            }
                            ?>
                    </table>
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