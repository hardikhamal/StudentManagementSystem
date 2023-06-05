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
                        $sql = "SELECT * FROM students WHERE id = '$id'";
                        $result = mysqli_query($conn,$sql);
                        $rows = mysqli_fetch_assoc($result);
                        $id1 = $rows['course'];
                        $sql1 = "SELECT * FROM subjects WHERE id = '$id1'";
                        $result1 = mysqli_query($conn,$sql1);
                        $rows1 = mysqli_fetch_assoc($result1);
                        //debug($rows,true);
                        $id2 = $rows['teacherid'];
                        $sql2 = "SELECT * FROM teachers WHERE id = '$id2'";
                        $result2 = mysqli_query($conn,$sql2);
                        $rows2 = mysqli_fetch_assoc($result2);
                        
                        //debug($rows2);
                    }
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Student's Profile</h1>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a href="stdupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</a>
                            </div>
                            <?php 
                                if(isset($rows['givenfee']) && $rows['givenfee'] == $rows['totalfee']){
                                    ?>
                                        <div class="col-md-3 mb-3">
                                            <a href="stdprint.php?id=<?php echo $rows['id'] ?>" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                                        </div>
                                    <?php
                                }
                            ?>
                            <div class="col-md-9"></div>
                            <div class="col-md-6">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Form Number</td>
                                        <td><?php echo $rows['form'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Student's Name</td>
                                        <td><?php echo $rows['stdsname'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo ucfirst($rows['sex']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $rows['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td><?php echo $rows['contactnum'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td><?php echo $rows['address'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Parents Contact</td>
                                        <td><?php echo $rows['parentcontact'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Course</td>
                                        <td><?php echo $rows1['subname'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Teacher Name</td>
                                        <td><?php echo $rows2['teachername'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Class Time</td>
                                        <td><?php echo $rows['classtime'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Academic Qualification</td>
                                        <td><?php echo $rows['acaqua'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>School/College Name</td>
                                        <td><?php echo $rows['schname'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Form Fee</td>
                                        <td><?php echo $rows['formfee'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total Fee</td>
                                        <td><?php echo $rows['totalfee'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Given Fee</td>
                                        <td><?php echo $rows['givenfee'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Due Fee</td>
                                        <td><?php 
                                            $duefee = $rows['totalfee'] - $rows['givenfee'];
                                            echo $duefee;
                                        ?></td>
                                    </tr>
                                    <tr>
                                        <td>Remarks</td>
                                        <td><?php
                                            if(isset($rows['givenfee']) && $rows['givenfee'] == $rows['totalfee']){
                                                echo 'Cleared';
                                            }else {
                                                echo 'Not Cleared';
                                            }
                                        ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php
                                    if('uploads/student/'!='uploads/student/'.$rows['img']){
                                        echo 'uploads/student/'.$rows['img'];
                                    }else {
                                        echo 'assets/img/logo.jpg';
                                    }
                                ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <a href="student.php"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
