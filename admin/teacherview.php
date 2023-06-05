<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Teacher's Details";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    if(isset($_GET,$_GET['id']) && !empty($_GET)){
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM teachers WHERE id = '$id'";
                        $result = mysqli_query($conn,$sql);
                        $rows = mysqli_fetch_assoc($result);
                        //debug($rows);
                    }
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Teacher's Profile</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Teacher's Name</td>
                                        <td><?php echo $rows['teachername'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Subject</td>
                                        <td><?php echo $rows['sub'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $rows['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td><?php echo $rows['contact'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>College/School Name</td>
                                        <td><?php echo $rows['college'] ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php
                                    if('uploads/teachers/'!='uploads/teachers/'.$rows['img']){
                                        echo 'uploads/teachers/'.$rows['img'];
                                    }else {
                                        echo 'assets/img/logo.jpg';
                                    }
                                ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a href="teacherlist.php"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
