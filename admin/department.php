<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Faculty List";
?>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Department List</h1>
                        <div class="row">
                            <div class="col-md-6 me-auto"><input type="text" id="myInput" class="form-control form-control-sm" placeholder="Search Here for Data..."></div>
                            <div class="col-md-3 ms-auto"><a href="adddepart.php" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add Department</a></div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-dark">
                                    <th>S.N.</th>
                                    <th>Department Name</th>
                                    <th>HOD</th>
                                    <th>Contact No.</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php 
                                $sql = "SELECT * FROM departments";
                                $result = mysqli_query($conn,$sql);
                                $i = 1;
                                if(mysqli_num_rows($result)>=1){
                                    while($rows = mysqli_fetch_assoc($result)){
                                        $id = $rows['hod'];
                                        $sql1 = "SELECT * FROM teachers WHERE id = '$id'";
                                        $result1 = mysqli_query($conn,$sql1);
                                        while($rows1 = mysqli_fetch_assoc($result1)){
                                            ?>
                                            <tbody id="myTable">
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $rows['departname'] ?></td>
                                                    <td><?php echo $rows1['teachername'] ?></td>
                                                    <td><?php echo $rows['contact'] ?></td>
                                                    <td><a href="<?php 
                                                        if('uploads/department/'!='uploads/department/'.$rows['img']){
                                                            echo 'uploads/department/'.$rows['img'];
                                                        }else {
                                                            echo 'assets/img/logo.jpg';
                                                        }
                                                    ?>"><img width="50" src="<?php 
                                                        if('uploads/department/'!='uploads/department/'.$rows['img']){
                                                            echo 'uploads/department/'.$rows['img'];
                                                        }else {
                                                            echo 'assets/img/logo.jpg';
                                                        }
                                                    ?>" alt=""></a></td>
                                                    <td>
                                                        <?php
                                                            if($_SESSION['role'] == 'admin'){
                                                                ?>
                                                                    <a href="departupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-success btn-sm rounded-circle"><i class="fa fa-pencil"></i></a> <a onclick="return confirm('Are you sure you wanna delete?')" href="process/departdel.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm rounded-circle"><i class="fa fa-trash"></i></a>
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
                                }else {
                                    ?>
                                    <tr>
                                        <td colspan="6">Data Not Found.</td>
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
