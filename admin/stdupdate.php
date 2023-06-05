<?php 
    require_once 'inc/header.php';
    require_once 'inc/topbar.php';
    require_once 'inc/sidebar.php';
    $title = "Student's Update";
?>
            <div id="layoutSidenav_content">
                <main>
                <?php echo flash();
                    if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
                        $id = $_GET['id'];
                        $sql2 = "SELECT * FROM students WHERE id = '$id'";
                        $result2 = mysqli_query($conn,$sql2);
                        $rows2 = mysqli_fetch_assoc($result2);
                        //debug($rows2);
                        $sql = "SELECT * FROM subjects";
                        $result = mysqli_query($conn,$sql);
                        $sql1 = "SELECT * FROM teachers";
                        $result1 = mysqli_query($conn,$sql1);
                    }
                ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Student</h1>
                        <form action="process/stdupdate.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Form Number</div>
                                <div class="col-md-10"><input type="text" required name="form" value="<?php echo $rows2['form'] ?>" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Student Name</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['stdsname'] ?>" required name="stdsname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Gender</div>
                                <div class="col-md-10 mt-3">Male <input type="radio" required name="gender" value="male" <?php echo $rows2['sex'] == 'male' ? 'checked' : '' ?>> Female <input type="radio" <?php echo $rows2['sex'] == 'female' ? 'checked' : '' ?> required name="gender" value="female"></div>
                                <div class="col-md-2 mt-3">Contact Number</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['contactnum'] ?>" required name="contactnum" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Address</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['address'] ?>" name="address" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Email</div>
                                <div class="col-md-10 mt-3"><input type="email" value="<?php echo $rows2['email'] ?>" name="email" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Parent's Contact</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['parentcontact'] ?>" name="parentcontact" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Class Time</div>
                                <div class="col-md-10 mt-3">
                                    <select name="classtime" id="" class="form-control form-control-sm">
                                        <option value="">--Select Your Options--</option>
                                        <option value="5am" <?php echo $rows2['classtime'] == '5am' ? 'selected' : '' ?>>5-6 AM</option>
                                        <option value="6am" <?php echo $rows2['classtime'] == '6am' ? 'selected' : '' ?>>6-7 AM</option>
                                        <option value="7am" <?php echo $rows2['classtime'] == '7am' ? 'selected' : '' ?>>7-8 AM</option>
                                        <option value="8am" <?php echo $rows2['classtime'] == '8am' ? 'selected' : '' ?>>8-9 AM</option>
                                        <option value="9am" <?php echo $rows2['classtime'] == '9am' ? 'selected' : '' ?>>9-10 AM</option>
                                        <option value="10am" <?php echo $rows2['classtime'] == '10am' ? 'selected' : '' ?>>10-11 AM</option>
                                        <option value="11am" <?php echo $rows2['classtime'] == '11am' ? 'selected' : '' ?>>11-12 PM</option>
                                        <option value="12pm" <?php echo $rows2['classtime'] == '12pm' ? 'selected' : '' ?>>12-1 PM</option>
                                        <option value="1pm" <?php echo $rows2['classtime'] == '1pm' ? 'selected' : '' ?>>1-2 PM</option>
                                        <option value="2pm" <?php echo $rows2['classtime'] == '2pm' ? 'selected' : '' ?>>2-3 PM</option>
                                        <option value="3pm" <?php echo $rows2['classtime'] == '3pm' ? 'selected' : '' ?>>3-4 PM</option>
                                        <option value="4pm" <?php echo $rows2['classtime'] == '4pm' ? 'selected' : '' ?>>4-5 PM</option>
                                        <option value="5pm" <?php echo $rows2['classtime'] == '5pm' ? 'selected' : '' ?>>5-6 PM</option>
                                        <option value="6pm" <?php echo $rows2['classtime'] == '6pm' ? 'selected' : '' ?>>6-7 PM</option>
                                        <option value="7pm" <?php echo $rows2['classtime'] == '7pm' ? 'selected' : '' ?>>7-8 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Academic Qualification</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['acaqua'] ?>" name="acaqua" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">College/School Name</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['schname'] ?>" name="schname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Form Fee</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['formfee'] ?>" required name="formfee" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Total Fee</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['totalfee'] ?>" required name="totalfee" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Given Fee</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['givenfee'] ?>" value="0" name="givenfee" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Date of Joining</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['dateofadmission'] ?>" required name="dateofadmission" id="nepalidate" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Date of Ending</div>
                                <div class="col-md-10 mt-3"><input type="text" value="<?php echo $rows2['dateofending'] ?>" name="dateofending" id="nepalidate2" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Image</div>
                                <div class="col-md-10 mt-3"><input type="file" name="img" class="form-control form-control-sm"></div>
                                <div class="col-md-8"></div>
                                <div class="col-md-4 mt-3"><img src="<?php echo 'uploads/student/'.$rows2['img'] ?>" alt="" class="img-fluid"></div>
                                <div class="col-md-8"></div>
                                <div class="col-md-4 mt-3"><input type="checkbox" name="del_image" value="1"> Delete</div>
                                <div class="col-md-2">
                                    <input type="hidden" name="id" value="<?php echo $rows2['id'] ?>">
                                    <button class="btn btn-success mt-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

<?php 
    require_once 'inc/footer.php';
?>
