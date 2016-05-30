<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Yohann
 * Date: 2016/3/23
 * Time: 9:44
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
@$modelType = $_GET['modelType'];
@$modelName = $_GET['modelName'];
if($modelName!=null&&$modelType!=null){
    $sql = "update menu set $modelType = NULL WHERE $modelType = '$modelName'";
    if ($pdo->exec($sql)) die("<script>{location.href = 'model_list.php?model_test=$modelType'}</script>");
}else{
    die("<script>{window.alert('数据为空');location.href = 'model_list.php'}</script>");
}
?>