<?php

require_once '../../config/init.php';

debug($_POST);
debug($_FILES);
if(isset($_POST['id']) && !empty($_POST['id'])){
    $id = $_POST['id'];
    $isql = "SELECT * FROM teachers WHERE id = '$id'";
    $iresult = mysqli_query($conn,$isql);
    $irows = mysqli_fetch_assoc($iresult);
    debug($irows);
}

if(isset($_POST['del_image']) && $_POST['del_image'] == '1'){
    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/teachers/'.$irows['img'];
    if(file_exists($path)){
        unlink($path);
    }
    if(isset($_POST) && !empty($_POST)){
        //debug($_POST,true);
        $teachername = $_POST['teachername'];
        $sub = $_POST['sub'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $college = $_POST['college'];
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
                    $imgname = 'Teacher-'.date('Ymdhis').rand(0,999).'.'.$imgextn;
                    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/teachers/'.$imgname;
                    move_uploaded_file($imgtmp,$path);
                }else {
                    redirect('../addteacher.php','error','Image Extension must be jpg, jpeg, png, gif, bmp only');
                }
            }else {
                redirect('../addteacher.php','error','Image size is greater than 2 MB');
            }
        }else {
            redirect('../addteacher.php','error','There is some error');
        }
        $sql = "UPDATE teachers SET teachername='$teachername',sub='$sub',email='$email',contact='$contact',college='$college',img='$imgname' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../teacherlist.php','success','Teachers is being Updated');
        }else {
            redirect('../teacherlist.php','error','Teacher is not being Updated');
        }
    }
}else {
    if(isset($_POST) && !empty($_POST)){
        //debug($_POST,true);
        $teachername = $_POST['teachername'];
        $sub = $_POST['sub'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $college = $_POST['college'];
        $sql = "UPDATE teachers SET teachername='$teachername',sub='$sub',email='$email',contact='$contact',college='$college' WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../teacherlist.php','success','Teachers is being Updated');
        }else {
            redirect('../teacherlist.php','error','Teacher is not being Updated');
        }
    }
}