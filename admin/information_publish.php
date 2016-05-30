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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn").on("click", function () {
                var information_type = document.getElementById("information_type").value;
                var information_title = document.getElementById("information_title").value;
                var information_url = document.getElementById("information_url").value;
                var information_class = document.getElementById("information_class").value;
                if(information_type == "请选择发布版块") {
                    alert("请选择发布版块");
                }else if(information_title == ""){
                    alert("信息标题不能为空");
                }else if(information_url!=""){
                    $.post("information_publish_submit.php",{information_type:$("#information_type").val(),information_title:information_title,information_url:information_url,information_class:information_class},function(data){
                        alert(data);
                        self.location='information_publish.php';
                    });
                }else{
                    $.post("information_publish_submit.php",{information_type:$("#information_type").val(),information_title:information_title,information_class:information_class,information_body:ue.getContent()},function(data){
                        alert(data);
                        self.location='information_publish.php';
                    });
                }
                return false;
            });
        });
    </script>
    <script>
        var ue = UE.getEditor('editor');
    </script>

    <script>
        function addCLASS(){
            var information_class = document.getElementById("information_class").value;
            var information_type=document.getElementById('information_type');
            if(information_class == '全部'){

            }else if(information_class == '通知公告'){
                information_type.options.add(new Option("请选择发布版块","请选择发布版块"));
                information_type.options.add(new Option("通知公告","通知公告"));
            }else if(information_class == '学院介绍'){
                information_type.options.add(new Option("请选择发布版块","请选择发布版块"));
                <?php
                require_once 'config.php';
                require_once 'funcitons.php';
                connectDB();
                $sql = "SELECT 学院介绍 from menu ";
                $result = $pdo->query($sql);
                foreach($result as $value){
                if($value['学院介绍']!=null){
                ?>
                information_type.options.add(new Option("<?php echo $value['学院介绍']?>", "<?php echo $value['学院介绍']?>"));
                <?php
                }
                }
                ?>
            }else if(information_class == '教学信息'){
                information_type.options.add(new Option("请选择发布版块","请选择发布版块"));
                <?php
                require_once 'config.php';
                require_once 'funcitons.php';
                connectDB();
                $sql = "SELECT 教学信息 from menu ";
                $result = $pdo->query($sql);
                foreach($result as $value){
                if($value['教学信息']!=null){
                ?>
                information_type.options.add(new Option("<?php echo $value['教学信息']?>", "<?php echo $value['教学信息']?>"));
                <?php
                }
                }
                ?>
            }else if(information_class == '就业中心'){
                information_type.options.add(new Option("请选择发布版块","请选择发布版块"));
                <?php
                require_once 'config.php';
                require_once 'funcitons.php';
                connectDB();
                $sql = "SELECT 就业中心 from menu ";
                $result = $pdo->query($sql);
                foreach($result as $value){
                if($value['就业中心']!=null){
                ?>
                information_type.options.add(new Option("<?php echo $value['就业中心']?>", "<?php echo $value['就业中心']?>"));
                <?php
                }
                }
                ?>
            }else if(information_class == '学习中心'){
                information_type.options.add(new Option("请选择发布版块","请选择发布版块"));
                <?php
                require_once 'config.php';
                require_once 'funcitons.php';
                connectDB();
                $sql = "SELECT 学习中心 from menu ";
                $result = $pdo->query($sql);
                foreach($result as $value){
                if($value['学习中心']!=null){
                ?>
                information_type.options.add(new Option("<?php echo $value['学习中心']?>", "<?php echo $value['学习中心']?>"));
                <?php
                }
                }
                ?>
            }else if(information_class == '管理中心'){
                information_type.options.add(new Option("请选择发布版块","请选择发布版块"));
                <?php
                require_once 'config.php';
                require_once 'funcitons.php';
                connectDB();
                $sql = "SELECT 管理中心 from menu ";
                $result = $pdo->query($sql);
                foreach($result as $value){
                if($value['管理中心']!=null){
                ?>
                information_type.options.add(new Option("<?php echo $value['管理中心']?>", "<?php echo $value['管理中心']?>"));
                <?php
                    }
                    }
                    ?>;
            }else if(information_class == '服务中心'){
                information_type.options.add(new Option("请选择发布版块","请选择发布版块"));
                <?php
                require_once 'config.php';
                require_once 'funcitons.php';
                connectDB();
                $sql = "SELECT 服务中心 from menu ";
                $result = $pdo->query($sql);
                foreach($result as $value){
                if($value['服务中心']!=null){
                ?>
                information_type.options.add(new Option("<?php echo $value['服务中心']?>", "<?php echo $value['服务中心']?>"));
                <?php
                }
                }
                ?>
            }
        }

        function removeCLASS() {
            var information_type = document.getElementById('information_type');
            information_type.options.length = 0;
        }

        function class_change(){
            var information_class = document.getElementById("information_class").value;
            removeCLASS();
            addCLASS();
        }
    </script>
</head>
<body>
<form action="" method="post">
    <div>
        <br />
        <select name="information_class" id="information_class" onchange="class_change()">
            <option>通知公告</option>
            <option>学院介绍</option>
            <option>教学信息</option>
            <option>就业中心</option>
            <option>学习中心</option>
            <option>管理中心</option>
            <option>服务中心</option>
        </select>
        <select name="information_type" id="information_type">
            <option>通知公告</option>
            <?php

            $sql = "SELECT * from menu IS NOT NULL ";
            $result = $pdo->query($sql);
            foreach($result as $value){

                if($value['学院介绍']!=null){
                ?>
                    <option><?php echo $value['学院介绍']?></option>
                <?php
                }

                if($value['视频中心']!=null){
                ?>
                    <option><?php echo $value['视频中心']?></option>
                <?php
                }

                if($value['服务中心']!=null){
                ?>
                    <option><?php echo $value['服务中心']?></option>
                <?php
                }

                if($value['管理中心']!=null){
                ?>
                    <option><?php echo $value['管理中心']?></option>
                <?php
                }

                if($value['学习中心']!=null){
                ?>
                    <option><?php echo $value['学习中心']?></option>
                <?php
                }

                if($value['就业中心']!=null){
                ?>
                    <option><?php echo $value['就业中心']?></option>
                <?php
                }

                if($value['教学信息']!=null){
                ?>
            <option><?php echo $value['教学信息']?></option>
                <?php
                }

            }
            ?>
        </select><br /><br />
        <input  name="information_title" id="information_title" type="text" placeholder="输入标题" style="width:100%;"><br /><br />
        <input type="text" name="information_url" id="information_url" placeholder="如果你需要发布第三方页面,请将链接填在此处" style="width: 100%"><br /><br />
        <script id="editor" type="text/plain" style="width:100%;height:500px;"></script>
        <button id="btn" type="button" onclick="tijiao()" class="am-btn am-btn-primary am-btn-block">发布</button>
        <!--<input type="button"  id="btn" onclick="tijiao()" class="am-btn am-btn-primary am-btn-block">-->
    </div>
</form>

</body>
</html>