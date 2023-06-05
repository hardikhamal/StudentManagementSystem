<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Add Teacher";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    //debug($_SESSION);
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Teacher</h1>
                        <form action="process/addteacher.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Teacher Name</div>
                                <div class="col-md-10"><input type="text" required name="teachername" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Subject</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="sub" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Email</div>
                                <div class="col-md-10 mt-3"><input type="email" name="email" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Contact Number</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="contact" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">College/School Name</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="college" class="form-control form-control-sm"></div>
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
