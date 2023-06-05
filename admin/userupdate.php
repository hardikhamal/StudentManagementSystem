<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "User's Update";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    //debug($_GET,true);
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update User</h1>
                        <?php 
                            if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM users WHERE id = '$id'";
                                $result = mysqli_query($conn, $sql);
                                $rows = mysqli_fetch_assoc($result);
                            }
                        if(isset($_GET,$_GET['cng']) && $_GET['cng'] == 'new'){
                            ?>
                            <form action="process/userupdate.php" method="post" class="form">
                            <div class="row">
                                <div class="col-md-2">Full Name</div>
                                <div class="col-md-10"><input type="text" value="<?php echo $rows['fname'] ?>" required name="fname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Email</div>
                                <div class="col-md-10 mt-3"><input type="email" value="<?php echo $rows['email'] ?>" required name="email" class="form-control form-control-sm"></div>
                                <div class="col-md-2">
                                    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                                    <input type="hidden" name="status" value="<?php echo $rows['status'] ?>">
                                    <input type="hidden" name="role" value="<?php echo $rows['role'] ?>">
                                    <button class="btn btn-success mt-5">Submit</button>
                                </div>
                            </div>
                        </form>
                            <?php
                        }else {
                            ?>
                            <form action="process/userupdate.php" method="post" class="form">
                            <div class="row">
                                <div class="col-md-2">Full Name</div>
                                <div class="col-md-10"><input type="text" value="<?php echo $rows['fname'] ?>" required name="fname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Email</div>
                                <div class="col-md-10 mt-3"><input type="email" value="<?php echo $rows['email'] ?>" required name="email" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Status</div>
                                <div class="col-md-10 mt-3">
                                    <select name="status" id="" class="form-control form-control-sm">
                                        <option value="">-- Select Option --</option>
                                        <option value="active" <?php echo $rows['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                                        <option value="inactive" <?php echo $rows['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Role</div>
                                <div class="col-md-10 mt-3">
                                    <select name="role" id="" class="form-control form-control-sm">
                                        <option value="">-- Select Option --</option>
                                        <option value="admin" <?php echo $rows['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                        <option value="accountant" <?php echo $rows['role'] == 'accountant' ? 'selected' : '' ?>>Accountant</option>
                                        <option value="stds" <?php echo $rows['role'] == 'stds' ? 'selected' : '' ?>>Student</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                                    <button class="btn btn-success mt-5">Submit</button>
                                </div>
                            </div>
                        </form>
                            <?php
                        }
                        ?>
                        
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
