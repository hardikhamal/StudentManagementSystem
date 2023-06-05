<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Teacher's Update";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM teachers WHERE id = '$id'";
                        $result = mysqli_query($conn,$sql);
                        $rows = mysqli_fetch_assoc($result);
                        
                        //debug($rows);
                    }
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Teacher</h1>
                        <form action="process/teacherupdate.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Teacher Name</div>
                                <div class="col-md-10"><input type="text" required name="teachername" value="<?php echo $rows['teachername'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Subject</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="sub" value="<?php echo $rows['sub'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Email</div>
                                <div class="col-md-10 mt-3"><input type="email" required name="email" value="<?php echo $rows['email'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Contact Number</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="contact" value="<?php echo $rows['contact'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">College/School Name</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="college" value="<?php echo $rows['college'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Image</div>
                                <div class="col-md-10 mt-3"><input type="file" name="img" class="form-control form-control-sm"></div>
                                <div class="col-md-8"></div>
                                <div class="col-md-4 mt-3"><img src="<?php echo 'uploads/teachers/'.$rows['img'] ?>" alt="" class="img-fluid"></div>
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
