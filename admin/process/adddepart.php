<?php

require_once '../../config/init.php';


if(isset($_POST) && !empty($_POST)){
    $departname = $_POST['departname'];
    $hod = $_POST['hod'];
    $contact = $_POST['contact'];
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
    }
    $sql = "INSERT INTO departments (departname, hod, contact, img) VALUES ('$departname','$hod','$contact','$imgname')";
    $result = mysqli_query($conn,$sql);
    if($result){
        redirect('../department.php','success','Department is being added');
    }else {
        redirect('../department.php','error','Department is not being added');
    }
}