<?php
require_once '../../config/init.php';

if(isset($_SESSION,$_SESSION['token']) && !empty($_SESSION['token'])){
    session_destroy();
    redirect('../../');
}