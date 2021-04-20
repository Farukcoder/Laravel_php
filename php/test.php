<?php
    require_once 'deshboard_part/header.php';
    require_once 'deshboard_part/left_menu.php';
    require 'session_check.php';
    require 'db.php';
?>
<?php


//search query
if(isset($_GET['search'])){
    $search= $_GET['search'];
    $select_query= "SELECT * FROM contact WHERE  fname like '%$search%' OR email like '%$search%' ";
    $result = mysqli_query($dbconnect,$select_query);
}else{
    $query = "SELECT * FROM contact";
    $result = mysqli_query($dbconnect, $query);
}




?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <input type="text" name="search_data" id="search_data"                                              class="form-control" placeholder="Search Heare....">
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary" id="search_btn"                                       value="<?= (isset( $search))? $search: ''?>">Search</button>
                        </div>

                        <br>

                    </div>
                </div>
                <table class="table table-sm table-dark" id="table_id">
                    <thead class="bg-info">

                    <tr>
                        <th scope="col"class="text-center">SL</th>
                        <th scope="col"class="text-center">Photo</th>
                        <th scope="col"class="text-center">Name</th>
                        <th scope="col"class="text-center">Email</th>
                        <th scope="col"class="text-center">Mobile</th>
                        <th scope="col"class="text-center">Massage</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbo    dy>

                        <?php
                        $i=1;
                        foreach ($result as $value) {
                            ?>
                            <tr>
                                <th><?php echo $i++;?></th>
                                <td><img src="image/<?php echo $value['photo'];?>" alt=""                                            width="50" height="50"></td>
                                <td><?php echo $value['fname'];?></td>
                                <td><?php echo $value['email'];?></td>
                                <td><?php echo $value['mobile'];?></td>
                                <td><?php echo $value['massage'];?></td>
                                <td colspan="6" class="text-center">
                                    <a href="single_view.php?id=<?php echo $value['id'];?>"                                             class="btn btn-primary">view</a>
                                    <a href="update_massage.php?id=<?php echo $value['id'];?>"                                          class="btn btn-info">Edit</a>
                                    <a href="delete.php?id=<?php echo $value['id'];?>" class="btn                                       btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                        if(empty($value)){
                            echo '<tr><td colspan="6" class="text-center">No data found<td></tr>';
                        }
                        ?>

                    </tbo>
                </table>
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script>
    $(function(){
        $('#search_btn').click(function(){
            var search_data = $('#search_data').val();
            var base_url = window.location;
            var search_url = base_url+'?search='+search_data;
            window.location.href = search_url;
        });
        $('#table_id').DataTable();
    });
</script>
