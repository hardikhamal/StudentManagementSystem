<?php

require_once '../../config/init.php';

//debug($_POST,true);

if(isset($_POST,$_POST['id']) && $_POST['id']){
    $id = $_POST['id'];
    if(isset($_POST) && !empty($_POST)){
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $status = $_POST['status'];
        $role = $_POST['role'];
        $sql = "UPDATE users SET fname = '$fname', email = '$email', status = '$status', role = '$role' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            redirect('../users.php','success','Updated Successfully');
        }else {
            redirect('../users.php','error','Cannot Update');
        }
    }
}