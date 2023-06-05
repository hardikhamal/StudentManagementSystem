<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Student's List";
?>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Student's List</h1>
                        <div class="row">
                            <div class="col-md-6 me-auto"><input type="text" id="myInput" class="form-control form-control-sm" placeholder="Search Here for Data..."></div>
                            <div class="col-md-2 ms-auto"><a href="addstudent.php" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add Student</a></div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-dark">
                                    <th>S.N.</th>
                                    <th>Students Name</th>
                                    <th>Time</th>
                                    <th>Subject</th>
                                    <th>Date of Joining</th>
                                    <th>Contact No.</th>
                                    <th>Remaining Fee</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php 
                                $sql = "SELECT * FROM students ORDER BY dateofadmission DESC";
                                $result = mysqli_query($conn,$sql);
                                $i = 1;
                                if(mysqli_num_rows($result)>=1){
                                    while($rows = mysqli_fetch_assoc($result)){
                                        //debug($rows);
                                        if(empty($rows['dateofending'])){
                                            $id = $rows['course'];
                                            $sql1 = "SELECT * FROM subjects WHERE id = '$id'";
                                            $result1 = mysqli_query($conn,$sql1);
                                            $rows1 = mysqli_fetch_assoc($result1);
                                            ?>
                                                <tbody id="myTable">
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><a style="text-decoration:none; font-weight:bold; color:blue;" title="Details of <?php echo $rows['stdsname'] ?>" href="studentview.php?id=<?php echo $rows['id'] ?>"><?php echo $rows['stdsname'] ?></a></td>
                                                            <td><?php echo ucfirst($rows['classtime']) ?></td>
                                                            <td><?php echo $rows1['subname'] ?></td>
                                                            <td>
                                                                <?php
                                                                    // $joining = "SELECT DATE_FORMAT(date) from students";
                                                                    // $join_query = mysqli_query($joining);
                                                                    // debug($join_query);
                                                                    $date = explode(' ',$rows['created_at']);
                                                                    $dateonly = $date[0];
                                                                    $todaymonth = date('m');
                                                                    $todaydate = date('d');
                                                                    $datesplit = explode('-',$dateonly);
                                                                    $regmonth = $datesplit[1];
                                                                    $regdate = $datesplit[2];
                                                                    if($regmonth == $todaymonth && $regdate+7 >= $todaydate || $rows['givenfee'] == $rows['totalfee']){
                                                                        echo '<p class="btn btn-success btn-sm">'.$rows['dateofadmission'].'</p>';
                                                                    }else {
                                                                        echo '<p class="btn btn-danger btn-sm">'.$rows['dateofadmission'].'</p>';
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td><?php echo $rows['contactnum'] ?></td>
                                                            <td><?php echo $rows['totalfee']-$rows['givenfee'] ?></td>
                                                            <td><?php 
                                                                if(isset($rows['givenfee']) && $rows['givenfee'] == $rows['totalfee']){
                                                                    echo '<p class="btn btn-success btn-sm">Cleared</p>';
                                                                }else {
                                                                    echo '<p class="btn btn-danger btn-sm">Not Cleared</p>';
                                                                }
                                                            ?></td>
                                                            <td>
                                                                <?php
                                                                    if($_SESSION['role'] == 'admin'){
                                                                        ?>
                                                                            <a href="stdupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-success btn-sm rounded-circle"><i class="fa fa-pencil"></i></a> <a onclick="return confirm('Are you sure you wanna delete?')" href="process/studentdel.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm rounded-circle"><i class="fa fa-trash"></i></a>
                                                                        <?php
                                                                    } 
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </a>
                                                </tbody>
                                            <?php
                                            $i++;
                                        }
                                    }
                                }else {
                                    ?>
                                    <tr>
                                        <td colspan="8">Data Not Found.</td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
