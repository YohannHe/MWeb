<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}else{
    header("location:login/index.html");
}
$school_type = $_POST['school_type'];
$school_info = $_POST['school_info'];
date_default_timezone_set('Asia/Shanghai');
$time = date('Y-m-d H:i:s');
require_once 'config.php';
require_once 'funcitons.php';
connectDB();
$sql = "SELECT * FROM school WHERE school_id='1'";
$result = $pdo->query($sql);
if(!($row = $result->fetch())){
    $sql = "INSERT INTO school(school_id) VALUES('1')";
    $pdo->exec($sql);
}

$sql = "UPDATE school SET $school_type='$school_info' WHERE school_id='1'";
$pdo->exec($sql);
if($school_type == "school_survey"){
    $sql = "UPDATE school SET school_survey_time='$time' WHERE school_id='1'";
}else{
    $sql = "UPDATE school SET school_team_time='$time' WHERE school_id='1'";
}
$pdo->exec($sql);
$pdo = null;
echo"修改成功";