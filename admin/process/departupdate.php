<?php

require_once '../../config/init.php';

debug($_POST);
debug($_FILES);
if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = $_POST['id'];
    $isql = "SELECT * FROM departments WHERE id = '$id'";
    $iresult = mysqli_query($conn,$isql);
    $irows = mysqli_fetch_assoc($iresult);
    debug($irows);
}

if(isset($_POST['del_image']) && $_POST['del_image'] == '1'){
    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/department/'.$irows['img'];
    if(file_exists($path)){
        unlink($path);
    }
    if(isset($_POST) && !empty($_POST)){
        //debug($_POST,true);
        $departname = $_POST['departname'];
        $hod = $_POST['hod'];
        $contact = $_POST['contact'];
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
                    $imgname = 'Department-'.date('Ymdhis').rand(0,999).'.'.$imgextn;
                    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/department/'.$imgname;
                    move_uploaded_file($imgtmp,$path);
                }else {
                    redirect('../department.php','error','Image Extension must be jpg, jpeg, png, gif, bmp only');
                }
            }else {
                redirect('../department.php','error','Image size is greater than 2 MB');
            }
        }else {
            redirect('../department.php','error','There is some error');
        }
        $sql = "UPDATE departments SET departname='$departname',hod='$hod',contact='$contact',img='$imgname' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../department.php','success','Departments is being Updated');
        }else {
            redirect('../department.php','error','Department is not being Updated');
        }
    }
}else {
    if(isset($_POST) && !empty($_POST)){
        //debug($_POST,true);
        $departname = $_POST['departname'];
        $hod = $_POST['hod'];
        $contact = $_POST['contact'];
        $sql = "UPDATE departments SET departname='$departname',hod='$hod',contact='$contact' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../department.php','success','Teachers is being Updated');
        }else {
            redirect('../department.php','error','Teacher is not being Updated');
        }
    }
}