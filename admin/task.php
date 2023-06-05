<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Task's List";
?>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Task's List</h1>
                        <div class="row">
                            <div class="col-md-6 me-auto"><input type="text" id="myInput" class="form-control form-control-sm" placeholder="Search Here for Data..."></div>
                            <div class="col-md-2 ms-auto"><a href="addtask.php" class="btn btn-success mb-2"><i class="fa fa-plus"></i> Add Tasks</a></div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-dark">
                                    <th>S.N.</th>
                                    <th>Task Heading</th>
                                    <th>Task Discription</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php 
                                $sql = "SELECT * FROM task";
                                $result = mysqli_query($conn,$sql);
                                $i = 1;
                                if(mysqli_num_rows($result)>=1){
                                    while($rows = mysqli_fetch_assoc($result)){
                                        //debug($rows);
                                            ?>
                                                <tbody id="myTable">
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $rows['taskhead'] ?></a></td>
                                                            <td><?php echo ucfirst($rows['taskdis']) ?></td>
                                                            <td><?php echo $rows['status'] ?></td>
                                                            <td><?php echo $rows['tskcmplt'] ?></td>
                                                            <td>
                                                                <?php
                                                                    if($_SESSION['role'] == 'admin'){
                                                                        ?>
                                                                            <a href="taskupdate.php?id=<?php echo $rows['id'] ?>" class="btn btn-success btn-sm rounded-circle"><i class="fa fa-pencil"></i></a> <a onclick="return confirm('Are you sure you wanna delete?')" href="process/taskdel.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm rounded-circle"><i class="fa fa-trash"></i></a>
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
