<?php
require_once '../../config/init.php';

debug($_POST);

if(isset($_POST) && !empty($_POST)){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $role = $_POST['role'];
    $password = sha1($email.$_POST['password']);
    $repass = sha1($email.$_POST['repass']);
    if($password == $repass){
        $sql = "INSERT INTO users (fname,email,status,role,password) VALUES ('$fname','$email','$status','$role','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../users.php','success','Users is Being Added');
        }else {
            redirect('../users.php','error','Users is not being added');
        }
    }else {
        redirect('../adduser.php','error','Both Password Doesnt match');
    }
}