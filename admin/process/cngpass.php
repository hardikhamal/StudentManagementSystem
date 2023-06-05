<?php 
require_once '../../config/init.php';
if(isset($_POST) && !empty($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_assoc($result);
        $email = $rows['email'];
        $cpass = sha1($email.$_POST['cpass']);
        $password = sha1($email.$_POST['password']);
        $repass = sha1($email.$_POST['password']);
        //debug($rows['password'],true);
        if($cpass == $rows['password']){
            if($password == $repass){
                $nsql = "UPDATE users SET password = '$password' WHERE id = '$id'";
                $nresult = mysqli_query($conn,$nsql);
                if($nresult){
                    session_destroy();
                    redirect('../../index.php','success','Password is being Changed');
                }else {
                    redirect('../changepass.php','error','Password Not able to change');
                }
            }else {
                redirect('../changepass.php','error','Both Password Doesnt match');
            }
        }else {
            redirect('../changepass.php','error','Current Password Doesnt Match');
        }
        //debug($rows);
    }
}
//debug($_POST);