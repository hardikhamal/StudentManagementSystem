<?php 
    require_once '../config/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container {
            width: 595px;
            box-shadow: 0 0 4px black;
            margin:auto;
            padding: 10px;
            margin-top: 10px;
        }
        .head1 {
            text-align: center;
            font-weight: bold;
            font-size: 25px;
        }
        .head2 {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .head3 {
            text-align: center;
            font-size: 15px;
            font-weight: bold;
        }
        .clearance {
            text-align: center;
            background: black;
            color: white;
            font-weight: bold;
            font-size: 30px;
            padding: 10px;
        }
        div {
            line-height: 25px;
        }
        .name, .teacher, .total {
            float: left;
        }
        .course, .form, .paid {
            float: left;
            padding-left: 40px;
        }
        .clc {
            clear: both;
        }
        span {
            border-bottom: 1px solid black;
            padding-right: 70px;
            padding-left: 30px;
            padding-bottom: 3px;
            font-weight: bold;
        }
        .auth {
            margin-top: 50px;
            text-align: right;
            position: relative;
        }
        .auth:before {
            content: '';
            width: 200px;
            height: 1px;
            background: black;
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            $std_data = mysqli_fetch_assoc($result);
            //debug($std_data);
            $id1 = $std_data['course'];
            $sql1 = "SELECT * FROM subjects WHERE id = '$id1'";
            $result1 = mysqli_query($conn,$sql1);
            $course_data = mysqli_fetch_assoc($result1);
            //debug($course_data);
            $id2 = $std_data['teacherid'];
            $sql2 = "SELECT * FROM teachers WHERE id = '$id2'";
            $result2 = mysqli_query($conn,$sql2);
            $teacher_data = mysqli_fetch_assoc($result2);
            //debug($teacher_data);
        }
    ?>
    <div class="container">
        <div class="head1">Sky Vision Foundation</div>
        <div class="head2">Gongabu Chowk, Kathmandu</div>
        <div class="head3">Contact: 01-5903074</div>
        <div class="clearance">Fee Clearance</div>
        <div class="name">Name: <span><?php echo $std_data['stdsname'] ?></span></div>
        <div class="course">Course: <span><?php echo $course_data['subname'] ?></span></div>
        <div class="clc"></div>
        <div class="teacher">Teacher's Name: <span><?php echo $teacher_data['teachername'] ?></span></div>
        <div class="form">Form Fee: <span><?php echo $std_data['formfee'] ?> /-</span></div>
        <div class="clc"></div>
        <div class="total">Total Fee: <span><?php echo $std_data['totalfee'] ?> /-</span></div>
        <div class="paid">Paid Fee: <span><?php echo $std_data['givenfee'] ?> /-</span></div>
        <div class="clc"></div>
        <div class="auth">Authorized Sign</div>
    </div>
</body>
</html>