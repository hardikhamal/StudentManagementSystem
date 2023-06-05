<?php

require_once '../../config/init.php';

// debug($_POST,true);

if(isset($_POST) && !empty($_POST)){
    $subname = $_POST['subname'];
    $depart = $_POST['depart'];
    $teachername = $_POST['teachername'];
    $coursedu = $_POST['coursedu'];
    $fee = $_POST['fee'];
    $units = $_POST['units'];
    $sql = "INSERT INTO subjects (subname, depart, teachername,coursedu,fee,units) VALUES ('$subname','$depart','$teachername','$coursedu','$fee','$units')";
    $result = mysqli_query($conn,$sql);
    if($result){
        redirect('../subject.php','success','Subject is being added');
    }else {
        redirect('../subject.php','error','Subject is not being added');
    }
}