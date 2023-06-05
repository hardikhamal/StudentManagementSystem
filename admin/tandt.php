<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Details by Teachers";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Reports</h1>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-3">
                                    <select name="teacher" id="" class="form-control form-control-sm">
                                        <option value="">--Select A Teacher's Name--</option>
                                        <?php 
                                            $sql = "SELECT * FROM teachers";
                                            $result = mysqli_query($conn,$sql);
                                            while($rows = mysqli_fetch_assoc($result)){
                                                ?>
                                                    <option value="<?php echo $rows['id'] ?>"><?php echo $rows['teachername'] ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="classtime" id="" class="form-control form-control-sm">
                                            <option value="">--Select a Time--</option>
                                            <option value="5am">5-6 AM</option>
                                            <option value="6am">6-7 AM</option>
                                            <option value="7am">7-8 AM</option>
                                            <option value="8am">8-9 AM</option>
                                            <option value="9am">9-10 AM</option>
                                            <option value="10am">10-11 AM</option>
                                            <option value="11am">11-12 PM</option>
                                            <option value="12pm">12-1 PM</option>
                                            <option value="1pm">1-2 PM</option>
                                            <option value="2pm">2-3 PM</option>
                                            <option value="3pm">3-4 PM</option>
                                            <option value="4pm">4-5 PM</option>
                                            <option value="5pm">5-6 PM</option>
                                            <option value="6pm">6-7 PM</option>
                                            <option value="7pm">7-8 PM</option>
                                        </select>
                                </div>
                                <div class="col-md-3"><button class="btn btn-success">Search</button></div>
                            </div>
                        </form>
                        <?php 
                            if(isset($_GET) && !empty($_GET)){
                                //debug($_GET,true);
                                $id = $_GET['teacher'];
                                $classtime = $_GET['classtime'];
                                $sql1 = "SELECT * FROM students WHERE teacherid = '$id' and classtime ='$classtime'";
                                $result1 = mysqli_query($conn,$sql1);
                                ?>
                                <table class="table table-stripped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Students Name</th>
                                            <th>Time</th>
                                            <th>Subject</th>
                                            <th>Date of Joining</th>
                                            <th>Contact No.</th>
                                            <th>Remaining Fee</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i = 1;
                                            if(mysqli_num_rows($result1)){
                                                while($rows1 = mysqli_fetch_assoc($result1)){
                                                    if(isset($rows1['dateofending']) && empty($rows1['dateofending'])){
                                                        //debug($rows1);
                                                        $id2 = $rows1['course'];
                                                        $sql2 = "SELECT * FROM subjects WHERE id = '$id2'";
                                                        $result2 = mysqli_query($conn,$sql2);
                                                        while($rows2 = mysqli_fetch_assoc($result2)){
                                                            //debug($rows2);
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $i ?></td>
                                                                    <td><?php echo $rows1['stdsname'] ?></td>
                                                                    <td><?php echo ucfirst($rows1['classtime']) ?></td>
                                                                    <td><?php echo ucfirst($rows2['subname']) ?></td>
                                                                    <td><?php echo ucfirst($rows1['dateofadmission']) ?></td>
                                                                    <td><?php echo ucfirst($rows1['contactnum']) ?></td>
                                                                    <td><?php echo ucfirst($rows1['totalfee'] - $rows1['givenfee']) ?></td>
                                                                    <td><a href="studentview.php?id=<?php echo $rows1['id'] ?>" class="btn btn-primary btn-sm rounded-circle"><i class="fa fa-eye"></i></a>
                                                                        <?php
                                                                            if($_SESSION['role'] == 'admin'){
                                                                                ?>
                                                                                    <a href="stdupdate.php?id=<?php echo $rows1['id'] ?>" class="btn btn-success btn-sm rounded-circle"><i class="fa fa-pencil"></i></a> <a onclick="return confirm('Are you sure you wanna delete?')" href="process/studentdel.php?id=<?php echo $rows1['id'] ?>" class="btn btn-danger btn-sm rounded-circle"><i class="fa fa-trash"></i></a>
                                                                                <?php
                                                                            } 
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                            $i++;
                                                        }
                                                    }
                                                }
                                            }else {
                                                ?>
                                                    <tr>
                                                        <td colspan="8">Details Not Found</td>
                                                    </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                            }
                        ?>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
