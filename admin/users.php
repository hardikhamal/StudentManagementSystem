<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Users";
?>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                        <div class="row">
                        <div class="col-md-6 me-auto"><input type="text" id="myInput" class="form-control form-control-sm" placeholder="Search Here for Data..."></div>
                            <div class="col-md-2 ms-auto"><a href="adduser.php" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add User</a></div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-dark">
                                    <th>S.N.</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php 
                                $sql = "SELECT * FROM users";
                                $result = mysqli_query($conn,$sql);
                                $i = 1;
                                if(mysqli_num_rows($result) >= 1){
                                    while($rows = mysqli_fetch_assoc($result)){
                                        ?>
                                            <tbody id="myTable">
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $rows['fname'] ?></td>
                                                    <td><?php echo $rows['email'] ?></td>
                                                    <td><?php echo $rows['status'] ?></td>
                                                    <td><?php echo $rows['role'] ?></td>
                                                    <td><a href="userupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-success btn-sm rounded-circle"><i class="fa fa-pencil"></i></a><a onclick="return confirm('Are you sure you wanna delete?')" href="process/userdelete.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm rounded-circle"><i class="fa fa-trash"></i></a></td>
                                                </tr>
                                            </tbody>
                                        <?php
                                        $i++;
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
