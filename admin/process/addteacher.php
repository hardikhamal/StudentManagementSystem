<?php

require_once '../../config/init.php';

// debug($_POST);
// debug($_FILES,true);
if(isset($_POST) && !empty($_POST)){
    $teachername = $_POST['teachername'];
    $sub = $_POST['sub'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $college = $_POST['college'];
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
    }
    $sql = "INSERT INTO teachers (teachername, sub, email, contact, college, img) VALUES ('$teachername','$sub','$email','$contact','$college','$imgname')";
    $result = mysqli_query($conn,$sql);
    if($result){
        redirect('../teacherlist.php','success','Teachers is being added');
    }else {
        redirect('../teacherlist.php','error','Teacher is not being added');
    }
}