<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = 'Add Users';
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    //debug($_SESSION);
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add User</h1>
                        <form action="process/adduser.php" method="post" class="form">
                            <div class="row">
                                <div class="col-md-2">Full Name</div>
                                <div class="col-md-10"><input type="text" required name="fname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Email</div>
                                <div class="col-md-10 mt-3"><input type="email" required name="email" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Status</div>
                                <div class="col-md-10 mt-3">
                                    <select name="status" id="" class="form-control form-control-sm">
                                        <option value="">-- Select Option --</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Role</div>
                                <div class="col-md-10 mt-3">
                                    <select name="role" id="" class="form-control form-control-sm">
                                        <option value="">-- Select Option --</option>
                                        <option value="admin">Admin</option>
                                        <option value="accountant">Accountant</option>
                                        <option value="stds">Student</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Password </div>
                                <div class="col-md-10 mt-3"><input required type="password" name="password" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Re-Enter Password</div>
                                <div class="col-md-10 mt-3"><input required type="password" name="repass" class="form-control form-control-sm"></div>
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
