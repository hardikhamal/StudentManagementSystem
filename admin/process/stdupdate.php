<?php

require_once '../../config/init.php';

// debug($_POST);
// debug($_FILES,true);
if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = $_POST['id'];
    $isql = "SELECT * FROM students WHERE id = '$id'";
    $iresult = mysqli_query($conn,$isql);
    $irows = mysqli_fetch_assoc($iresult);
    debug($irows);
}

if(isset($_POST['del_image']) && $_POST['del_image'] == '1'){
    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/student/'.$irows['img'];
    if(file_exists($path)){
        unlink($path);
    }
    if(isset($_POST) && !empty($_POST)){
        //debug($_POST,true);
        $form = $_POST['form'];
        $stdsname = $_POST['stdsname'];
        $sex = $_POST['gender'];
        $contactnum = $_POST['contactnum'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $parentcontact = $_POST['parentcontact'];
        $classtime = $_POST['classtime'];
        $acaqua = $_POST['acaqua'];
        $schname = $_POST['schname'];
        $formfee = $_POST['formfee'];
        $totalfee = $_POST['totalfee'];
        $givenfee = $_POST['givenfee'];
        $dateofadmission = $_POST['dateofadmission'];
        $dateofending = $_POST['dateofending'];
        $img = $_FILES['img'];
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
        $sql = "UPDATE students SET form='$form', stdsname='$stdsname',sex='$sex',contactnum='$contactnum',address='$address',email='$email',parentcontact='$parentcontact',classtime='$classtime',acaqua='$acaqua',schname='$schname',formfee='$formfee',totalfee='$totalfee',givenfee='$givenfee',dateofadmission='$dateofadmission',dateofending='$dateofending',img='$imgname' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../student.php','success','Students is being Updated');
        }else {
            redirect('../student.php','error','Students is not being Updated');
        }
    }
}else {
    if(isset($_POST) && !empty($_POST)){
        //debug($_POST,true);
        $form = $_POST['form'];
        $stdsname = $_POST['stdsname'];
        $sex = $_POST['gender'];
        $contactnum = $_POST['contactnum'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $parentcontact = $_POST['parentcontact'];
        $classtime = $_POST['classtime'];
        $acaqua = $_POST['acaqua'];
        $schname = $_POST['schname'];
        $formfee = $_POST['formfee'];
        $totalfee = $_POST['totalfee'];
        $givenfee = $_POST['givenfee'];
        $dateofadmission = $_POST['dateofadmission'];
        $dateofending = $_POST['dateofending'];
        $sql = "UPDATE students SET form='$form', stdsname='$stdsname',sex='$sex',contactnum='$contactnum',address='$address',email='$email',parentcontact='$parentcontact',classtime='$classtime',acaqua='$acaqua',schname='$schname',formfee='$formfee',totalfee='$totalfee',givenfee='$givenfee',dateofadmission='$dateofadmission',dateofending='$dateofending' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../student.php','success','Students is being Updated');
        }else {
            redirect('../student.php','error','Students is not being Updated');
        }
    }
}