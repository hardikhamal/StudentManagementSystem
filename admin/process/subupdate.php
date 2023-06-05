<?php

require_once '../../config/init.php';

//debug($_POST,true);

if(isset($_POST,$_POST['id']) && $_POST['id']){
    $id = $_POST['id'];
    if(isset($_POST) && !empty($_POST)){
        $subname = $_POST['subname'];
        $teachername = $_POST['teachername'];
        $depart = $_POST['depart'];
        $coursedu = $_POST['coursedu'];
        $fee = $_POST['fee'];
        $units = $_POST['units'];
        $sql = "UPDATE subjects SET subname = '$subname', teachername = '$teachername', depart = '$depart', coursedu = '$coursedu', fee = '$fee', units = '$units' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            redirect('../subject.php','success','Updated Successfully');
        }else {
            redirect('../subject.php','error','Cannot Update');
        }
    }
}