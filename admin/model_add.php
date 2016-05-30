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
        <form action="model_add_submit.php" method="post" class="am-form">
            <fieldset class="am-form-set">
                <select name="modelType" id="">
                    <option>学院介绍</option>
                    <option>教学信息</option>
                    <option>就业中心</option>
                    <option>学习中心</option>
                    <option>管理中心</option>
                    <option>服务中心</option>
                    <option>视频中心</option>
                </select>
                <input name="modelName" type="text" placeholder="模块名">
            </fieldset>
            <button type="submit" class="am-btn am-btn-primary am-btn-block">添加模块</button>
        </form>
    </div>
</div>
</body>
</html>
