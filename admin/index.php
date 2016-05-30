<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link rel="stylesheet" href="assets/amazeui.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
    <script>
        function info_main(src){  //修改元素的属性
            var index = document.getElementById("main");
            index.setAttribute("src",src);
        }
    </script>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}else{
    header("location:login/index.html");
}

?>
<div class="nav-top">
	<span>后台管理系统</span>
    <div class="nav-topright">
        <span>您好：<?php echo"$username";?></span><span><a href="login/login_out.php">注销</a></span>
    </div>
</div>
<div class="nav-down">
	<div class="leftmenu1">
        <div class="menu-oc"><img src="images/menu-all.png" /></div>
    	<ul>
            <li>
                <a class="a_list a_list3" href="#"  onclick="info_main('information_publish.php')">信息发布</a>
                <div class="menu_list"></div>
            </li>
        	<li>
            	<a class="a_list a_list1">信息列表</a>
                <div class="menu_list menu_list_first">
                    <a href="#" onclick="info_main('information_list.php?information_type=通知公告')">通知公告</a>
                    <?php
                        require_once 'config.php';
                        require_once 'funcitons.php';
                        connectDB();
                        $sql = "SELECT * from menu ";
                        $result = $pdo->query($sql);
                        foreach($result as $value){
                            if($value['学院介绍']!=null){
                                ?>
                                <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['学院介绍']?>')"><?php echo $value['学院介绍']?></a>
                                <?php
                            }
                            if($value['教学信息']!=null){
                                ?>
                                <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['教学信息']?>')"><?php echo $value['教学信息']?></a>
                                <?php
                            }
                            if($value['就业中心']!=null){
                                ?>
                                <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['就业中心']?>')"><?php echo $value['就业中心']?></a>
                                <?php
                            }
                            if($value['学习中心']!=null){
                                ?>
                                <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['学习中心']?>')"><?php echo $value['学习中心']?></a>
                                <?php
                            }
                            if($value['管理中心']!=null){
                                ?>
                                <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['学院介绍']?>')"><?php echo $value['管理中心']?></a>
                                <?php
                            }
                            if($value['服务中心']!=null){
                                ?>
                                <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['服务中心']?>')"><?php echo $value['服务中心']?></a>
                                <?php
                            }
                            if($value['视频中心']!=null){
                                ?>
                                <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['视频中心']?>')"><?php echo $value['视频中心']?></a>
                                <?php
                            }

                        }
                    ?>


                </div>
            </li>
            <li>
            	<a class="a_list a_list3">学院信息</a>
                <div class="menu_list">
                	<a href="#" onclick="info_main('school_info.php?school_type=学院概况')">学院概况</a>
                    <a href="#" onclick="info_main('school_info.php?school_type=教学团队')">教学团队</a>
                </div>
            </li>
            <li>
                <a class="a_list a_list3">视频中心</a>
                <div class="menu_list">
                    <a href="#" onclick="info_main('video_list.php?video_type=学习视频')">学习视频</a>
                    <a href="#" onclick="info_main('video_list.php?video_type=活动视频')">活动视频</a>
                    <a href="#" onclick="info_main('video_publish.html')">视频发布</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list2">管理员</a>
                <div class="menu_list">
                	<a href="#">管理员</a>
                    <a href="#" onclick="info_main('admin_list.php')">管理员列表</a>
                    <a href="#" onclick="info_main('admin_add.html')">添加管理员</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list2" href="#" onclick="info_main('password_change.html')">修改密码</a>
            </li>
        </ul>
    </div>
    <div class="leftmenu2">
        <ul>
            <li>
                <a class="j_a_list j_a_list3"></a>
                <div class="j_menu_list j_menu_list_first">
                    <span class="sp3"><i></i>信息管理</span>
                    <a class="j_lista_first" href="#" onclick="info_main('information_publish.php')">信息发布</a>
                </div>
            </li>
        	<li>
            	<a class="j_a_list j_a_list1"></a>
                <div class="j_menu_list j_menu_list_first">
                	<span class="sp1"><i></i>信息列表</span>
                	<a class="j_lista_first" href="#" onclick="info_main('information_list.php?information_type=通知公告')">通知公告</a>
                    <?php
                    require_once 'config.php';
                    require_once 'funcitons.php';
                    connectDB();
                    $sql = "SELECT * from menu ";
                    $result = $pdo->query($sql);
                    foreach($result as $value){
                        if($value['学院介绍']!=null){
                            ?>
                            <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['学院介绍']?>')"><?php echo $value['学院介绍']?></a>
                            <?php
                        }
                        if($value['教学信息']!=null){
                            ?>
                            <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['教学信息']?>')"><?php echo $value['教学信息']?></a>
                            <?php
                        }
                        if($value['就业中心']!=null){
                            ?>
                            <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['就业中心']?>')"><?php echo $value['就业中心']?></a>
                            <?php
                        }
                        if($value['学习中心']!=null){
                            ?>
                            <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['学习中心']?>')"><?php echo $value['学习中心']?></a>
                            <?php
                        }
                        if($value['管理中心']!=null){
                            ?>
                            <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['学院介绍']?>')"><?php echo $value['管理中心']?></a>
                            <?php
                        }
                        if($value['服务中心']!=null){
                            ?>
                            <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['服务中心']?>')"><?php echo $value['服务中心']?></a>
                            <?php
                        }
                        if($value['视频中心']!=null){
                            ?>
                            <a href="#" onclick="info_main('information_list.php?information_type=<?php echo $value['视频中心']?>')"><?php echo $value['视频中心']?></a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </li>
            <li>
            	<a class="j_a_list j_a_list2"></a>
                <div class="j_menu_list">
                	<span class="sp1"><i></i>学校信息</span>
                    <a href="#" onclick="info_main('school_info.php?school_type=学院概况')">学院概况</a>
                    <a href="#" onclick="info_main('school_info.php?school_type=教学团队')">教学团队</a>
                </div>
            </li>
            <li>
                <a class="j_a_list j_a_list1"></a>
                <div class="j_menu_list">
                    <span class="sp1"><i></i>视频中心</span>
                    <a href="#" onclick="info_main('video_list.php?video_type=学习视频')">学习视频</a>
                    <a href="#" onclick="info_main('video_list.php?video_type=活动视频')">活动视频</a>
                    <a href="#" onclick="info_main('video_publish.html')">视频发布</a>
                </div>
            </li>
            <li>
            	<a class="j_a_list j_a_list2"></a>
                <div class="j_menu_list">
                	<span class="sp2"><i></i>管理员</span>
                	<a href="#" onclick="info_main('admin_list.php')">管理员列表</a>
                    <a href="#" onclick="info_main('admin_add.html')">添加管理员</a>
                    <a href="#" onclick="info_main('model_list.php')">模块管理</a>
                </div>
            </li>

            <li>
                <a class="j_a_list j_a_list2"></a>
                <div class="j_menu_list j_menu_list_first">
                    <span class="sp2"><i></i>个人信息</span>
                    <a href="#" onclick="info_main('password_change.html')">修改密码</a>
                </div>
            </li>

<!--            <li>-->
<!--                <a class="j_a_list j_a_list1"></a>-->
<!--                <div class="j_menu_list j_menu_list_first menu-oc1">-->
<!--                    <span class="sp1 menu-oc1"><i></i>侧边栏</span>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
    </div>
    <div class="rightcon">
    	<div class="right_con">
            <iframe id='main' src='information_publish.php' frameborder='0' width='100%' height="1200px"></iframe>
        </div>
    </div>
</div>

</body>
</html>
<script type="text/javascript">
	
</script>