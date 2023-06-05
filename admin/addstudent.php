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
                        <h1 class="mt-4">Add Student</h1>
                        <form action="process/addstudent.php" method="post" class="form" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">Form Number</div>
                                <div class="col-md-10"><input type="text" required name="form" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Student Name</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="stdsname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Gender</div>
                                <div class="col-md-10 mt-3">Male <input type="radio" required name="gender" value="male"> Female <input type="radio" required name="gender" value="female"></div>
                                <div class="col-md-2 mt-3">Contact Number</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="contactnum" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Address</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="address" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Email</div>
                                <div class="col-md-10 mt-3"><input type="email" name="email" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Parent's Contact</div>
                                <div class="col-md-10 mt-3"><input type="text" name="parentcontact" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Course</div>
                                <div class="col-md-10 mt-3">
                                    <select name="course" id="" class="form-control form-control-sm">
                                                <option value="">--Select Your Options--</option>
                                    <?php 
                                        while($rows = mysqli_fetch_assoc($result)){
                                            //debug($rows);
                                            ?>
                                                <option value="<?php echo $rows['id'] ?>"><?php echo $rows['subname'] ?></option>
                                            <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Teacher Name</div>
                                <div class="col-md-10 mt-3">
                                    <select name="teacherid" id="" class="form-control form-control-sm">
                                                <option value="">--Select Your Options--</option>
                                    <?php 
                                        while($rows1 = mysqli_fetch_assoc($result1)){
                                            //debug($rows1,true);
                                            ?>
                                                <option value="<?php echo $rows1['id'] ?>"><?php echo $rows1['teachername'] ?></option>
                                            <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Class Time</div>
                                <div class="col-md-10 mt-3">
                                    <select name="classtime" id="" class="form-control form-control-sm">
                                        <option value="">--Select Your Options--</option>
                                        <option value="5am">5-6 AM</option>
                                        <option value="6am">6-7 AM</option>
                                        <option value="7am">7-8 AM</option>
                                        <option value="8am">8-9 AM</option>
                                        <option value="9am">9-10 AM</option>
                                        <option value="10am">10-11 AM</option>
                                        <option value="11am">11-12 PM</option>
                                        <option value="12pm">12-1 PM</option>
                                        <option value="1pm">1-2 PM</option>
                                        <option value="2pm">2-3 PM</option>
                                        <option value="3pm">3-4 PM</option>
                                        <option value="4pm">4-5 PM</option>
                                        <option value="5pm">5-6 PM</option>
                                        <option value="6pm">6-7 PM</option>
                                        <option value="7pm">7-8 PM</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-3">Academic Qualification</div>
                                <div class="col-md-10 mt-3"><input type="text" name="acaqua" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">College/School Name</div>
                                <div class="col-md-10 mt-3"><input type="text" name="schname" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Form Fee</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="formfee" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Total Fee</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="totalfee" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Given Fee</div>
                                <div class="col-md-10 mt-3"><input type="text" name="givenfee" value="0" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Date of Joining</div>
                                <div class="col-md-10 mt-3"><input type="text" required name="dateofadmission" id="nepalidate" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Date of Ending</div>
                                <div class="col-md-10 mt-3"><input type="text" name="dateofending" id="nepalidate2" class="form-control form-control-sm"></div>
                                <div class="col-md-2 mt-3">Image</div>
                                <div class="col-md-10 mt-3"><input type="file" name="img" class="form-control form-control-sm"></div>
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
