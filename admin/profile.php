<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Profile";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    //debug($_SESSION);
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Profile</h1>
                        <div class="row">
                            <div class="col-md-6">
                            <table class="table table-striped">
                                <tr>
                                    <td>Full Name</td>
                                    <td><?php echo $_SESSION['fname'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $_SESSION['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><?php echo $_SESSION['status'] ?></td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td><?php echo $_SESSION['role'] ?></td>
                                </tr>
                            </table>
                            <a href="changepass.php?id=<?php echo $_SESSION['id'] ?>">Change Password</a> <br>
                            <a href="userupdate.php?id=<?php echo $_SESSION['id'] ?>&cng=new">Change Profile</a> <br><br>
                            </div>
                        </div>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
