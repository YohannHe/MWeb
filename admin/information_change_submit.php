<?php
@$information_id = $_POST['information_id'];
@$information_title = $_POST['information_title'];
@$information_body = $_POST['information_body'];
@$information_url = $_POST['information_url'];
require_once 'config.php';
require_once 'funcitons.php';
connectDB();
if ($information_url!=null){
    $sql = "UPDATE information SET information_title='$information_title',information_url='$information_url' WHERE information_id='$information_id'";
    $pdo->exec($sql);
    $pdo = null;
    echo"修改成功";
}else{
    $sql = "UPDATE information SET information_title='$information_title',information_body='$information_body' WHERE information_id='$information_id'";
    $pdo->exec($sql);
    $pdo = null;
    echo"修改成功";
}
