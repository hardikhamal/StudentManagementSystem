<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Change Password";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();

                    //debug($_SESSION);
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Change Password</h1>
                        <form action="process/cngpass.php" method="post" class="form">
                            <div class="row">
                                <div class="col-md-2 mt-3">Current Password </div>
                                <div class="col-md-10 mt-3"><input required type="password" name="cpass" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Password </div>
                                <div class="col-md-10 mt-3"><input required type="password" name="password" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Re-Enter Password</div>
                                <div class="col-md-10 mt-3"><input required type="password" name="repass" class="form-control form-control-sm"></div>
                                <div class="col-md-2">
                                    <?php 
                                        if(isset($_GET,$_GET['id']) && $_GET['id']){
                                            $id = $_GET['id'];
                                            $sql = "SELECT * FROM users WHERE id = '$id'";
                                            $result = mysqli_query($conn,$sql);
                                            $rows = mysqli_fetch_assoc($result);
                                        }
                                    ?>
                                    <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
                                    <button class="btn btn-success mt-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
