<?php

require_once '../../config/init.php';
debug($_POST);
debug($_FILES);

if(isset($_POST) && !empty($_POST)){
    $form = $_POST['form'];
    $stdsname = $_POST['stdsname'];
    $gender = $_POST['gender'];
    $contactnum = $_POST['contactnum'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $parentcontact = $_POST['parentcontact'];
    $course = $_POST['course'];
    $teacherid = $_POST['teacherid'];
    $classtime = $_POST['classtime'];
    $acaqua = $_POST['acaqua'];
    $schname = $_POST['schname'];
    $formfee = $_POST['formfee'];
    $totalfee = $_POST['totalfee'];
    $givenfee = $_POST['givenfee'];
    $dateofadmission = $_POST['dateofadmission'];
    $dateofending = $_POST['dateofending'];
    $img = $_FILES['img'];
    if($img['size'] != 0){
        $imgname = $img['name'];
        $imgtmp = $img['tmp_name'];
        $imgerror = $img['error'];
        $imgsize = $img['size'];
        if($imgerror == 0){
            if($imgsize <= 2000000){
                $splitimg = explode('.',$imgname);
                $imgextn = strtolower(end($splitimg));
                $wantedextn = array('jpg','jpeg','png','gif','bmp');
                if(in_array($imgextn,$wantedextn)){
                    $imgname = 'Student-'.date('Ymdhis').rand(0,999).'.'.$imgextn;
                    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/student/'.$imgname;
                    move_uploaded_file($imgtmp,$path);
                }else {
                    redirect('../student.php','error','Image Extension must be jpg, jpeg, png, gif, bmp only');
                }
            }else {
                redirect('../student.php','error','Image size is greater than 2 MB');
            }
        }else {
            redirect('../student.php','error','There is some error');
        }
    }
    $sql = "INSERT INTO students (form, stdsname, sex, contactnum, address, email,parentcontact, course,teacherid, classtime, acaqua, schname, formfee, totalfee, givenfee, dateofadmission, dateofending, img) VALUES ('$form','$stdsname','$gender','$contactnum','$address','$email','$parentcontact','$course','$teacherid','$classtime','$acaqua','$schname','$formfee','$totalfee','$givenfee','$dateofadmission','$dateofending','$imgname')";
    $result = mysqli_query($conn,$sql);
    if($result){
        redirect('../student.php','success','Teachers is being added');
    }else {
        redirect('../student.php','error','Teacher is not being added');
    }
}