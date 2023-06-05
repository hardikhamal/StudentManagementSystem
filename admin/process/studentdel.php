<?php
require_once '../../config/init.php';
if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT img FROM students WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_assoc($result);
    $path = $_SERVER['DOCUMENT_ROOT'].'/svfac/admin/uploads/student/'.$rows['img'];
    if(file_exists($path)){
        unlink($path);
    }
    $dsql = "DELETE FROM students WHERE id = '$id'";
    $dresult = mysqli_query($conn,$dsql);
    if($dresult){
        redirect('../student.php','success','Students List is being deleted');
    }else {
        redirect('../student.php','error','Students list is not being deleted');
    }
}
debug($_GET);