<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="assets/amazeui.min.css"/>
    <style>
        a{
            color: mintcream;
        }
    </style>
</head>
<body>
<?php
$video_type=$_GET['video_type'];
echo "视频列表>>$video_type";
require_once 'config.php';
require_once 'funcitons.php';
connectDB();
$sql = "SELECT * from video WHERE video_type='$video_type'";
$result = $pdo->query($sql);
?>
<table class="am-table">
    <thead>
    <tr>
        <th width="10%">视频ID</th>
        <th width="65%">视频标题</th>
        <th width="15%">视频发布时间</th>
        <th>操作管理</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    while($row = $result->fetch()) {
        $video_id = $row['video_id'];
        $video_title = $row['video_title'];
        $video_time = $row['video_time'];
        if($i % 2 == 0) echo "<tr class='am-active'>";
        else echo"<tr>";
        echo "
            <td>$video_id</td>
            <td>$video_title</td>
            <td>$video_time</td>
            <td><span class='am-badge am-badge-success'><a href='video_change.php?video_id=$video_id'>编辑</a></span> <span class='am-badge am-badge-danger'><a href='video_del.php?video_id=$video_id&video_type=$video_type'>删除</a></span></td>
        </tr>
        ";
        $i++;
    }
    ?>
    </tbody>
</table>
<?php
$pdo = null;
?>
</body>
</html>