<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Department's Update";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM departments WHERE id = '$id'";
                        $result = mysqli_query($conn,$sql);
                        $rows = mysqli_fetch_assoc($result);
                        //debug($rows,true);
                    }
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Department</h1>
                        <form action="process/departupdate.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Department Name</div>
                                <div class="col-md-10"><input type="text" required name="departname" value="<?php echo $rows['departname'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">HOD</div>
                                <div class="col-md-10 mt-3">
                                <?php echo flash();
                                    $sql1 = "SELECT * FROM teachers";
                                    $result1 = mysqli_query($conn,$sql1);
                                ?>
                                    <select name="hod" id="" class="form-control form-control-sm">
                                        <option value="">--Select your Option--</option>
                                        <?php 
                                            while($rows1=mysqli_fetch_assoc($result1)){
                                                ?>
                                                <option value="<?php echo $rows1['id'] ?>"><?php echo $rows1['teachername'] ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Contact Number</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="contact" value="<?php echo $rows['contact'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Image</div>
                                <div class="col-md-10 mt-3"><input type="file" name="img" class="form-control form-control-sm"></div>
                                <div class="col-md-8"></div>
                                <div class="col-md-4 mt-3"><img src="<?php echo 'uploads/department/'.$rows['img'] ?>" alt="" class="img-fluid"></div>
                                <div class="col-md-8"></div>
                                <div class="col-md-4 mt-3"><input type="checkbox" name="del_image" value="1"> Delete</div>
                                <div class="col-md-2">
                                    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                                    <button class="btn btn-success mt-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
