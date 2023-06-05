<?php
require_once '../../config/init.php';
if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT img FROM departments WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($result);
    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/department/'.$rows['img'];
    if(file_exists($path)){
        unlink($path);
    }
    $dsql = "DELETE FROM departments WHERE id = '$id'";
    $dresult = mysqli_query($conn,$dsql);
    if($dresult){
        redirect('../department.php','success','Department List is being deleted');
    }else {
        redirect('../department.php','error','Department list is not being deleted');
    }
}
debug($_GET);