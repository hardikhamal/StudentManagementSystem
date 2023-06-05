<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Add Subject";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    $sql1 = "SELECT * FROM teachers";
                    $result1 = mysqli_query($conn,$sql1);
                    $sql = "SELECT * FROM departments";
                    $result = mysqli_query($conn,$sql);
                 ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Subject</h1>
                        <form action="process/addsub.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Subject Name</div>
                                <div class="col-md-10"><input type="text" required name="subname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Teacher Name</div>
                                <div class="col-md-10 mt-3">
                                    <select name="teachername" id="" class="form-control form-control-sm">
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
                                <div class="col-md-2 mt-3">Department</div>
                                <div class="col-md-10 mt-3">
                                    <select name="depart" id="" class="form-control form-control-sm">
                                        <option value="">--Select your Option--</option>
                                        <?php 
                                            while($rows1=mysqli_fetch_assoc($result)){
                                                ?>
                                                <option value="<?php echo $rows1['id'] ?>"><?php echo $rows1['departname'] ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Course Duration</div>
                                <div class="col-md-10 mt-3"><input type="text" name="coursedu" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Course Fee</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="fee" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Nature</div>
                                <div class="col-md-10 mt-3">
                                    <select name="units" id="" class="form-control form-control-sm">
                                        <option value="">-- Select your Options--</option>
                                        <option value="course">Course</option>
                                        <option value="months">Months</option>
                                    </select>
                                </div>
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
