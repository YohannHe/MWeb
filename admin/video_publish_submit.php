<?php
$video_type = $_POST['video_type'];
$video_title = $_POST['video_title'];
$video_body = $_POST['video_body'];
require_once 'config.php';
require_once 'funcitons.php';
connectDB();
date_default_timezone_set('Asia/Shanghai');
$video_time = date('Y-m-d H:i:s');
$sql = "INSERT INTO video(video_type,video_title,video_body,video_picture,video_time) VALUES('$video_type','$video_title','$video_body','images/video_picture/default.png','$video_time')";
$pdo->exec($sql);

$video_id = $pdo ->lastInsertId();
if (!empty($_FILES['video_picture']['tmp_name'])) {  //如果选择了图片

    $file_image = $_FILES['video_picture'];
    $file_image_name = "images/video_picture/$video_id.png";  //图片文件名
    move_uploaded_file($file_image['tmp_name'], $file_image_name);  //保存图片到服务器
    $sql = "UPDATE video SET video_picture='$file_image_name' WHERE video_id='$video_id'";  //把图片地址存入数据库
    $pdo->exec($sql);
}

$pdo = null;
echo"发布成功";