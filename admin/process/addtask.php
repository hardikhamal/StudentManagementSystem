<?php

require_once '../../config/init.php';

//debug($_POST,true);

if(isset($_POST) && !empty($_POST)){
    $priority = $_POST['priority'];
    $taskhead = $_POST['taskhead'];
    $taskdis = $_POST['taskdis'];
    $status = $_POST['status'];
    $sql = "INSERT INTO task (priority, taskhead, taskdis,status) VALUES ('$priority','$taskhead','$taskdis','$status')";
    $result = mysqli_query($conn,$sql);
    if($result){
        redirect('../task.php','success','Task is being added');
    }else {
        redirect('../task.php','error','Task is not being added');
    }
}