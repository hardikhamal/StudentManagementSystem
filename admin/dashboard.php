<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Dashboard";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    $sql = "SELECT * FROM teachers";
                    $result = mysqli_query($conn,$sql);
                    $rows = mysqli_num_rows($result);

                    $sql1 = "SELECT * FROM departments";
                    $result1 = mysqli_query($conn,$sql1);
                    $rows1 = mysqli_num_rows($result1);

                    $sql2 = "SELECT * FROM subjects";
                    $result2 = mysqli_query($conn,$sql2);
                    $rows2 = mysqli_num_rows($result2);

                    $sql3 = "SELECT * FROM students";
                    $result3 = mysqli_query($conn,$sql3);
                    $rows3 = mysqli_num_rows($result3);
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <?php 
                            if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'accountant'){
                                ?>
                                    <div class="row">
                            <div class="col-md-3">
                                <a href="teacherlist.php">
                                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                                        <div class="card-header fs-1 text-danger"><i class="fa fa-chalkboard-user"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total Teachers</h5>
                                            <p class="card-text fs-1 fw-bold counter text-white bg-primary"><?php echo $rows ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="department.php">
                                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                                        <div class="card-header fs-1 text-danger"><i class="fa fa-building"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total Department</h5>
                                            <p class="card-text fs-1 fw-bold counter text-white bg-primary"><?php echo $rows1 ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="subject.php">
                                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                                        <div class="card-header fs-1 text-danger"><i class="fa fa-book"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total Subject</h5>
                                            <p class="card-text fs-1 fw-bold counter text-white bg-primary"><?php echo $rows2 ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="student.php">
                                    <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                                        <div class="card-header fs-1 text-danger"><i class="fa fa-chalkboard-user"></i></div>
                                        <div class="card-body">
                                            <h5 class="card-title">Total Students</h5>
                                            <p class="card-text fs-1 fw-bold counter text-white bg-primary"><?php echo $rows3 ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php 
                            $sql4 = "SELECT * FROM task";
                            $result4 = mysqli_query($conn,$sql4);
                        ?>
                        <h1 class="mt-4 mb-4">Today's Task</h1>
                        <div class="row">
                            <?php
                                if(mysqli_num_rows($result4)){
                                    while($rows4 = mysqli_fetch_assoc($result4)){
                                        if($rows4['tskcmplt'] == 0 && $rows4['status'] == 'active'){
                                            ?>
                                            <div class="col-md-3">
                                                <div class="card text-bg-primary mb-3 text-center" style="max-width: 18rem;">
                                                        <div class="card-header fs-3 text-danger fw-bold"><?php echo ucfirst($rows4['priority']) ?></div>
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold"><?php echo $rows4['taskhead'] ?></h5>
                                                            <p class="card-text"><?php echo $rows4['taskdis'] ?></p>
                                                            <p class="text-center">
                                                                <form action="process/tskcmplt.php" method="post">
                                                                    <input type="checkbox" name="tskcmplt" value="1"> Task Completed <br>
                                                                    <input type="hidden" name="id" value="<?php echo $rows4['id'] ?>">
                                                                    <button class="btn btn-success btn-sm mt-3">Submit</button>
                                                                </form>
                                                            </p>
                                                        </div>
                                                    </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                }else {
                                    ?>
                                        <p class="fw-bold fs-4">There is no Task Right now.</p>
                                    <?php
                                }
                            ?>
                        </div>
                                <?php
                            }else {
                                ?>
                                    <p style="font-size: 20px;">Welcome <strong><?php echo ucfirst($_SESSION['fname']) ?></strong>! Your Details and Fee details are shown here.</p>
                                    <br>
                                    <?php debug($rows3) ?>
                                <?php
                            }
                        ?>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
