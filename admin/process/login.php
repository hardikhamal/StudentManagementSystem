<?php

require_once '../../config/init.php';

debug($_POST);

if(isset($_POST) && !empty($_POST)){
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if(!$email){
        redirect('../../','error','Enter a valid email');
    }
    $enc_pass = sha1($email.$_POST['password']);
    $sql = "SELECT id,email, password, fname,role,status FROM users WHERE email = '$email' and password = '$enc_pass'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);
    if($email == $rows['email'] && $enc_pass == $rows['password']){
        if($rows['status'] == 'active'){
            setSession('id',$rows['id']);
            setSession('fname',$rows['fname']);
            setSession('email',$rows['email']);
            setSession('role',$rows['role']);
            setSession('status',$rows['status']);
            setSession('token',rand(0,999));
            redirect('../dashboard.php','success','Welcome to Dashboard.');
        }else {
            redirect('../../','error','Your User is not active. Please contact your administrator.');
        }
    }else {
        redirect('../../','error','Credirential Doesnt Match');
    }
    debug($rows);
}else {
    redirect('../../','error','Login First');
}