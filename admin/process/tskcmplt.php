<?php

require_once '../../config/init.php';

//debug($_POST,true);

if(isset($_POST) && !empty($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];
        $tskcmplt = $_POST['tskcmplt'];
        $sql = "UPDATE task SET tskcmplt='$tskcmplt' WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            redirect('../dashboard.php');
        }else {
            redirect('../dashboard.php');
        }
    }
}