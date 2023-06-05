<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Add Depart";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    $sql1 = "SELECT * FROM teachers";
                    $result1 = mysqli_query($conn,$sql1);
                 ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Department</h1>
                        <form action="process/adddepart.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Department Name</div>
                                <div class="col-md-10"><input type="text" required name="departname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">HOD</div>
                                <div class="col-md-10 mt-3">
                                    <select name="hod" id="" class="form-control form-control-sm">
                                        <option value="">--Select your Option--</option>
                                        <?php 
                                            while($rows=mysqli_fetch_assoc($result1)){
                                                ?>
                                                <option value="<?php echo $rows['id'] ?>"><?php echo $rows['teachername'] ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Contact Number</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="contact" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Image</div>
                                <div class="col-md-10 mt-3"><input type="file" name="img" class="form-control form-control-sm"></div>
                                <div class="col-md-2">
                                    <button class="btn btn-success mt-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
