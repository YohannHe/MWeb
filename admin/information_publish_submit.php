<?php
@$information_type = $_POST['information_type'];
@$information_title = $_POST['information_title'];
@$information_url = $_POST['information_url'];
@$information_class = $_POST['information_class'];
@$information_body = $_POST['information_body'];
require_once 'config.php';
require_once 'funcitons.php';
connectDB();
date_default_timezone_set('Asia/Shanghai');
$information_time = date('Y-m-d H:i:s');

if ($information_url!=null){
    $sql = "INSERT INTO information(information_type,information_title,information_url,information_time,information_class) VALUES('$information_type','$information_title','$information_url','$information_time','$information_class')";
    $pdo->exec($sql);
    $pdo = null;
    echo"发布成功";
}else{
    $sql = "INSERT INTO information(information_type,information_title,information_body,information_time,information_class) VALUES('$information_type','$information_title','$information_body','$information_time','$information_class')";
    $pdo->exec($sql);
    $pdo = null;
    echo"发布成功";
}
