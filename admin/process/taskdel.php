<?php
require_once '../../config/init.php';
if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $dsql = "DELETE FROM task WHERE id = '$id'";
    $dresult = mysqli_query($conn,$dsql);
    if($dresult){
        redirect('../task.php','success','Task List is being deleted');
    }else {
        redirect('../task.php','error','Task list is not being deleted');
    }
}
debug($_GET);