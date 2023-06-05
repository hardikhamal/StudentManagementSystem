<?php 

require_once '../../config/init.php';

debug($_POST);

if(isset($_POST) && !empty($_POST)){
	$fname = $_POST['fname'];
	$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	if(!$email){
		redirect('../../registration.php','error','Enter Valid Email');
	}
	$pass = sha1($email.$_POST['pass']);
	$repass = sha1($email.$_POST['repass']);
	if($pass != $repass){
		redirect('../../registration.php','error','Password and Confirm Password Does not Match');
	}
	$sql = "INSERT INTO users (fname,email,password) VALUES ('$fname','$email','$pass')";
	$result = mysqli_query($conn, $sql);
	if($result){
		redirect("../../registration.php",'success','Account is Being Created Successfully.');
	}else {
		redirect("../../registration.php",'error','Sorry your Account is not being created.');
	}
}