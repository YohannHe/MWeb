<?php
/**
 * Created by PhpStorm.
 * User: Yohann
 * Date: 2016/3/27
 * Time: 18:32
 */
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}else{
    header("location:login/index.html");
}

require_once 'config.php';
require_once 'funcitons.php';
connectDB();
@$modelType = $_POST['modelType'];
@$modelName = $_POST['modelName'];
@$oldModelName = $_POST['oldModelName'];
if($modelName!=null&&$modelType!=null&&$oldModelName){
    $sql = "update menu set $modelType = '$modelName' WHERE $modelType = '$oldModelName'";
    if ($pdo->exec($sql)){
        die("<script>{location.href = 'model_list.php?model_test=$modelType'}</script>");
    }else{
        echo"<script>{window.alert('修改失败')}</script>";
        die("<script>{location.href = 'model_list.php?model_test=$modelType'}</script>");
    }

}else{
    die("<script>{window.alert('数据为空');location.href = 'model_list.php'}</script>");
}
?>