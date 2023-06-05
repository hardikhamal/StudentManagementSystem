<?php

ob_start();
session_start();
date_default_timezone_set('Asia/Kathmandu');

define('SITE_URL',$_SERVER['DOCUMENT_ROOT']);
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','');
define('DB_NAME','project');
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
define("CSS_URL",$_SERVER['DOCUMENT_ROOT'].'/sms/assets/css/');
define("JS_URL",$_SERVER['DOCUMENT_ROOT'].'/sms/assets/js/');
define("IMG_URL",$_SERVER['DOCUMENT_ROOT'].'/sms/assets/img/');