<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
    <link rel="stylesheet" href="assets/amazeui.min.css"/>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/amazeui.min.js"></script>

    <style type="text/css">
        div{
            width:100%;
        }
    </style>

    <?php
    $school_type = $_GET['school_type'];
    require_once 'config.php';
    require_once 'funcitons.php';
    connectDB();
    $sql = "SELECT * from school WHERE school_id='1'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
    $school_survey = $row['school_survey'];
    $school_team = $row['school_team'];
    echo "学院管理>>$school_type";
    if($school_type == '学院概况') $school_type="school_survey";
    else $school_type="school_team";
    ?>
    <script>
        var ue = UE.getEditor('editor');
        ue.ready(function() {
            ue.setContent('<?php
             if($school_type == 'school_survey') echo "$school_survey";
             else echo "$school_team";
             ?>');
        });
    </script>

    <script type="text/javascript">
        school_type = "<?php echo "$school_type";?>";
        $(document).ready(function(){
            $("#btn").on("click",function(){
                $.post("school_change_submit.php",{school_type:school_type,school_info:ue.getContent()},function(data){
                    alert(data);
                });
            });
        });

    </script>
</head>
<body>
<form action="" method="post">
    <div>
        <br />
        <script id="editor" type="text/plain" style="width:100%;height:500px;"></script>
        <button id="btn" type="button" class="am-btn am-btn-primary am-btn-block">保存</button>
    </div>
</form>
<?php
$pdo = null;
?>
</body>
</html>