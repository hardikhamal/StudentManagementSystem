<?php
require_once '../../config/init.php';
if(isset($_GET,$_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $dsql = "DELETE FROM subjects WHERE id = '$id'";
    $dresult = mysqli_query($conn,$dsql);
    if($dresult){
        redirect('../subject.php','success','Subject List is being deleted');
    }else {
        redirect('../subject.php','error','Subject list is not being deleted');
    }
}
debug($_GET);