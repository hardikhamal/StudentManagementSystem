<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Subject List";
?>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Subject List</h1>
                        <div class="row">
                            <div class="col-md-6 me-auto"><input type="text" id="myInput" class="form-control form-control-sm" placeholder="Search Here for Data..."></div>
                            <div class="col-md-3 ms-auto"><a href="addsubject.php" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add Subject</a></div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-dark">
                                    <th>S.N.</th>
                                    <th>Subject Name</th>
                                    <th>Department</th>
                                    <th>Teacher's Name</th>
                                    <th>Course Duration</th>
                                    <th>Course Fee</th>
                                    <th>Per</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php 
                                $sql = "SELECT * FROM subjects";
                                $result = mysqli_query($conn,$sql);
                                $i = 1;
                                if(mysqli_num_rows($result)>=1){
                                    while($rows = mysqli_fetch_assoc($result)){
                                        //debug($rows);
                                        $id = $rows['teachername'];
                                        $sql1 = "SELECT * FROM teachers WHERE id = '$id'";
                                        $result1 = mysqli_query($conn,$sql1);
                                        while($rows1 = mysqli_fetch_assoc($result1)){
                                            //debug($rows1);
                                            $id1 = $rows['depart'];
                                            $sql2 = "SELECT * FROM departments WHERE id = '$id1'";
                                            $result2 = mysqli_query($conn,$sql2);
                                            while($rows2 = mysqli_fetch_assoc($result2)){
                                                //debug($rows2);
                                                ?>
                                                <tbody id="myTable">
                                                    <tr>
                                                        <td><?php echo $i ?></td>
                                                        <td><?php echo $rows['subname'] ?></td>
                                                        <td><?php echo $rows2['departname'] ?></td>
                                                        <td><?php echo $rows1['teachername'] ?></td>
                                                        <td><?php echo $rows['coursedu'] ?></td>
                                                        <td><?php echo $rows['fee'] ?></td>
                                                        <td><?php echo $rows['units'] ?></td>
                                                        <td>
                                                            <?php
                                                                if($_SESSION['role'] == 'admin'){
                                                                    ?>
                                                                        <a href="subupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-success btn-sm rounded-circle"><i class="fa fa-pencil"></i></a> <a onclick="return confirm('Are you sure you wanna delete?')" href="process/subdel.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm rounded-circle"><i class="fa fa-trash"></i></a>
                                                                    <?php
                                                                } 
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php
                                            $i++; 
                                            }
                                            
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
