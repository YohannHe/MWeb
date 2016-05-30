<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: Yohann
 * Date: 2016/3/24
 * Time: 8:36
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
if($modelName!=null&&$modelType!=null){
    $sql = "select * from menu WHERE $modelType = '$modelName'";
    $result = $pdo->query($sql);
    if ($row = $result->fetch()) {
        die("<script>{window.alert('模块已存在');location.href = 'model_add.php'}</script>");
    }else{
        $sql = "insert into menu($modelType)VALUES('$modelName')";
        if ($pdo->exec($sql)) die("<script>{window.alert('添加成功');location.href = 'model_list.php?model_test=$modelType'}</script>");
    }
}else{
    die("<script>{window.alert('数据为空');location.href = 'model_add.php'}</script>");
}
?>