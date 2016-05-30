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
<body onload="test()">
    <?php
        @$pt = $_POST['model_test'];
        if($pt==null){
            @$pt = $_GET['model_test'];
        }
        if($pt==null||$pt=='全部'){
            $pt = '*';
        }
    ?>
    <script>
        function test(){
            var select = document.getElementById("model_list");
            for(var i=0; i<select.options.length; i++){
                if(select.options[i].innerHTML == '<?php echo $pt;?>'){
                    select.options[i].selected = true;
                    break;
                }
            }
        }
    function change(){
        document.getElementById('tj').value = document.getElementById('model_list').value;
        document.getElementById('model_btn').click();
    }
</script>

<form id="model" action="model_list.php" method="post">
    <select id="model_list" name="model_name" onchange="change()" >
        <option>全部</option>
        <option>学院介绍</option>
        <option>教学信息</option>
        <option>就业中心</option>
        <option>学习中心</option>
        <option>管理中心</option>
        <option>服务中心</option>
        <option>视频中心</option>
    </select>
    <input type="text" name="model_test" id="tj" style="display: none">
    <input type="submit" id="model_btn" style="display: none">
</form>

<?php
require_once 'config.php';
require_once 'funcitons.php';
connectDB();
$sql = "SELECT $pt from menu ";
$result = $pdo->query($sql);
?>
<table class="am-table">
    <thead>
    <tr>
        <th width="10%">模块名</th>
        <th width="65%"></th>
        <th width="15%"></th>
        <th>操作管理</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    if($pt=='*'){
        foreach($result as $value){
            $menu1 =  $value['学院介绍'];
            $menu2 =  $value['教学信息'];
            $menu3 =  $value['就业中心'];
            $menu4 =  $value['学习中心'];
            $menu5 =  $value['管理中心'];
            $menu6 =  $value['服务中心'];
            $menu7 =  $value['视频中心'];

            if($menu1!=null){
                echo "<tr class=''>";

                echo "
            <td>$menu1</td>
            <td></td>
            <td></td>
            <td><span class='am-badge am-badge-success'><a href='model_change.php?modelType=学院介绍&modelName=$menu1'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu1&modelType=学院介绍'>删除</a></span></td>
        </tr>
        ";
            }
            if($menu2!=null){
                 echo "<tr class=''>";

                echo "
            <td>$menu2</td>
            <td></td>
            <td></td>
            <td><span class='am-badge am-badge-success'><a href='model_change.php?modelType=教学信息&modelName=$menu2'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu2&modelType=教学信息'>删除</a></span></td>
        </tr>
        ";
            }
            if($menu3!=null){
                 echo "<tr class=''>";

                echo "
            <td>$menu3</td>
            <td></td>
            <td></td>
            <td><span class='am-badge am-badge-success'><a href='model_change.php?modelType=就业中心&modelName=$menu3'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu3&modelType=就业中心'>删除</a></span></td>
        </tr>
        ";
            }
            if($menu4!=null){
                echo "<tr class=''>";

                echo "
            <td>$menu4</td>
            <td></td>
            <td></td>
            <td><span class='am-badge am-badge-success'><a href='model_change.php?modelType=学习中心&modelName=$menu4'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu4&modelType=学习中心'>删除</a></span></td>
        </tr>
        ";
            }
            if($menu5!=null){
                 echo "<tr class=''>";

                echo "
            <td>$menu5</td>
            <td></td>
            <td></td>
            <td> <span class='am-badge am-badge-success'><a href='model_change.php?modelType=管理中心&modelName=$menu5'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu5&modelType=管理中心'>删除</a></span></td>
        </tr>
        ";
            }
            if($menu6!=null){
                 echo "<tr class=''>";

                echo "
            <td>$menu6</td>
            <td></td>
            <td></td>
            <td><span class='am-badge am-badge-success'><a href='model_change.php?modelType=服务中心&modelName=$menu6'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu6&modelType=服务中心'>删除</a></span></td>
        </tr>
        ";
            }
            if($menu7!=null){
               echo "<tr class=''>";

                echo "
            <td>$menu7</td>
            <td></td>
            <td></td>
            <td><span class='am-badge am-badge-success'><a href='model_change.php?modelType=视频中心&modelName=$menu7'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu7&modelType=视频中心'>删除</a></span></td>
        </tr>
        ";
            }


            $i ++;
        }
    }else{
        foreach($result as $value){
            if($value[$pt]!=null) {


                $menu = $value[$pt];

                echo "<tr class=''>";

                echo "
            <td>$menu</td>
            <td></td>
            <td></td>
            <td><span class='am-badge am-badge-success'><a href='model_change.php?modelType=$pt&modelName=$menu'>编辑</a></span><span class='am-badge am-badge-danger'><a href='model_del.php?modelName=$menu&modelType=$pt'>删除</a></span></td>
        </tr>
        ";
                $i++;
            }
        }
    }

    $pdo = null;
    ?>
    </tbody>
</table>
    <a href="model_add.php" class="am-btn am-btn-primary am-btn-block" >添加模块</a>
</body>
</html>