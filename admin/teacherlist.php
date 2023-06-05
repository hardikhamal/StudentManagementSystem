<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Teacher's List";
?>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Teacher's List</h1>
                        <div class="row">
                            <div class="col-md-6 me-auto"><input type="text" id="myInput" class="form-control form-control-sm" placeholder="Search Here for Data..."></div>
                            <div class="col-md-2 ms-auto"><a href="addteacher.php" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add Teacher</a></div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-dark">
                                    <th>S.N.</th>
                                    <th>Teachers Name</th>
                                    <th>Subject</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>College/School Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php 
                                $sql = "SELECT * FROM teachers";
                                $result = mysqli_query($conn,$sql);
                                $i = 1;
                                if(mysqli_num_rows($result)>=1){
                                    while($rows = mysqli_fetch_assoc($result)){
                                        //debug();
                                        ?>
                                            <tbody id="myTable">
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $rows['teachername'] ?></td>
                                                    <td><?php echo $rows['sub'] ?></td>
                                                    <td><?php echo $rows['email'] ?></td>
                                                    <td><?php echo $rows['contact'] ?></td>
                                                    <td><?php echo $rows['college'] ?></td>
                                                    <td><a href="<?php
                                                        if('uploads/teachers/'!='uploads/teachers/'.$rows['img']){
                                                            echo 'uploads/teachers/'.$rows['img'];
                                                        }else {
                                                            echo 'assets/img/logo.jpg';
                                                        }
                                                    ?>"><img width="50" src="<?php
                                                        if('uploads/teachers/'!='uploads/teachers/'.$rows['img']){
                                                            echo 'uploads/teachers/'.$rows['img'];
                                                        }else {
                                                            echo 'assets/img/logo.jpg';
                                                        }
                                                    ?>" alt=""></a></td>
                                                    <td><a href="teacherview.php?id=<?php echo $rows['id'] ?>" class="btn btn-primary btn-sm rounded-circle"><i class="fa fa-eye"></i></a>
                                                        <?php
                                                            if($_SESSION['role'] == 'admin'){
                                                                ?>
                                                                    <a href="teacherupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-success btn-sm rounded-circle"><i class="fa fa-pencil"></i></a> <a onclick="return confirm('Are you sure you wanna delete?')" href="process/teacherdel.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm rounded-circle"><i class="fa fa-trash"></i></a>
                                                                <?php
                                                            } 
                                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php
                                        $i++;
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
