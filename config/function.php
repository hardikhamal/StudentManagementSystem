<?php

function debug($data,$is_exit = false){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    if($is_exit){
        exit;
    }
}
function setSession($key,$msg){
    if(!isset($_SESSION)){
        session_start();
    }
    $_SESSION[$key] = "$msg";
}
function redirect($path,$key = NULL, $msg = NULL){
    if($key != null){
        setSession($key,$msg);
    }
    header("location: ".$path);
    exit;
}
function flash(){
    if(isset($_SESSION,$_SESSION['error']) && !empty($_SESSION['error'])){
        echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
    if(isset($_SESSION,$_SESSION['success']) && !empty($_SESSION['success'])){
        echo "<p class='alert alert-success'>".$_SESSION['success']."</p>";
        unset($_SESSION['success']);
    }
}