<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Add Student";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    $sql = "SELECT * FROM subjects";
                    $result = mysqli_query($conn,$sql);
                    $sql1 = "SELECT * FROM teachers";
                    $result1 = mysqli_query($conn,$sql1);
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Task</h1>
                        <form action="process/addtask.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Priority</div>
                                <div class="col-md-10">
                                    <select name="priority" id="" class="form-control form-control-sm">
                                        <option value="">--Select Your Options--</option>
                                        <option value="normal">Normal</option>
                                        <option value="urgent">Urgent</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Task Heading</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="taskhead" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Task Description</div>
                                <div class="col-md-10 mt-3">
                                    <textarea name="taskdis" id="" cols="30" rows="10" class="form-control form-control-sm"></textarea>
                                </div>
                                <div class="col-md-2 mt-3">Status</div>
                                <div class="col-md-10 mt-3">
                                    <select name="status" id="" class="form-control form-control-sm">
                                        <option value="">--Select Your Options--</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>   
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success mt-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
