<?php

require_once '../../config/init.php';
if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        redirect('../users.php','success','User is being deleted');
    }else {
        redirect('../users.php','error','User is not being deleted');
    }
}