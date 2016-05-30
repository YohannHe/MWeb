<?php
/**
 * Created by PhpStorm.
 * User: Yohann
 * Date: 2016/3/27
 * Time: 18:15
 */
@$modelType = $_GET['modelType'];
@$modelName = $_GET['modelName'];
if ($modelName==null&&$modelType){
    die("<script>{window.alert('参数错误！');location.href = 'model_list.php'}</script>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/amazeui.min.css"/>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="am-g">
    <div class="am-u-md-8 am-u-sm-centered">
        <form action="model_change_submit.php" method="post" class="am-form">
            <fieldset class="am-form-set">
                <input type="hidden" value="<?php echo $modelName?>" name="oldModelName" >
                <input name="modelName" type="text" value="<?php echo $modelName?>" placeholder="修改的模块名">
                <input type="text" name="modelType" style="display: none" value="<?php echo $modelType?>">
            </fieldset>
            <button type="submit" class="am-btn am-btn-primary am-btn-block">确认修改</button>
        </form>
    </div>
</div>
</body>
</html>

