<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="loading">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <script>
        var logined = 0
    </script>
    <title>浙江商业职业技术学院外国语学院</title>
    <style>
        @media screen and (min-width: 640px) {

            #header .search_open {
                background-position: -107px -441px;
                right: 0%;
                width: 35px;
                top: 10px
            }

            #header {
                width: 640px;
                margin: 0 auto;
            }

            #container {
                width: 640px;
                margin: 0 auto;
            }

        }

        #title-img {
            max-width: 100%;
            height: 100%;
        }

        #header {
            height: 50px;
        }
    </style>

</head>

<body>
<script>
    var now_page = 1,
        search_value = '';
</script>
<div id="menu">
    <ul id="menuList">
        <li class="nav_index " id="1"><a  href="index.php"><i></i><span>首页</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index " id="1"><a  href="contentbk.php?menu=学院介绍&type=专业介绍"><i></i><span>学院介绍</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index " id="1"><a  href="contentbk.php?menu=教学信息&type=培养方案"><i></i><span>教学信息</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index " id="1"><a  href="contentbk.php?menu=就业中心&type=政策文件"><i></i><span>就业中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index " id="1"><a  href="contentbk.php?menu=学习中心&type=等级考试"><i></i><span>学习中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index " id="1"><a  href="contentbk.php?menu=视频中心&type=学习视频"><i></i><span>视频中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index " id="1"><a  href="contentbk.php?menu=管理中心&type=班级管理"><i></i><span>管理中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index " id="1"><a  href="contentbk.php?menu=服务中心&type=生活服务"><i></i><span>服务中心</span><b></b><div class="clear"></div></a></li>

    </ul>
</div>
<div id="header">
    <i class="menu_back"><a href="index.php"></a></i>
    <div style="display: inline; line-height: 50px;">
        <img id="title-img" src="images/&#x5fae;&#x7f51;&#x9875;_02.png" width="640" height="69" alt="">
    </div>
    <i class="search_open" style=""></i>

<div id="container">
    <div id="content">

        <p align="center">
            <img id="timg" src="images/title.jpg" alt="">
        </p>

        <?php
        //连接数据库
        require_once "DataBaseConnection.php";
        @$menu = $_GET['menu'];
        @$type = $_GET['type'];
        @$page = $_GET['page'];

        if ($type == null || $menu == null) {
            if($type=='通知公告'){
                $sql_count = "select count(id) from from information WHERE information_type='$type'";
                $result_count = $pdo->query($sql_count);
                if($result_count>10){
                    if($page!=null){
                        if($page>1){
                            $num = ($page-1)*10;
                            $sql_type = "select information_id,information_title,information_time ,information_class from information WHERE information_type='$type' limit $num,10";

                        }else{
                            $sql_type = "select information_id,information_title,information_time ,information_class from information WHERE information_type='$type' limit 0,10";

                        }
                        $result_type = $pdo->query($sql_type);
                    }
                }else{
                    $sql_type = "select information_id,information_title,information_time ,information_class from information WHERE information_type='$type'";
                    $result_type = $pdo->query($sql_type);
                }
                ?>
                <div class="cate">
                    <a class="aw"
                       href="contentbk.php?type=通知公告" >通知公告</a>
                </div>

                    <div  id="conn" class="con" >
                        <ul>
                            <?php
                            foreach ($result_type as $item) {
                                ?>

                                <li ><span><?php echo $item['information_time']?></span><a  class="alist"
                                                                                                                                vhref="Detail.php?information_id=<?php echo $item['information_id'] ?>"
                                                                                                                                ><?php echo $item['information_title'] ?></a>
                                </li>

                                <?php
                            }
                            ?>
                        </ul>
                    </div>

                <?php
            }
        } elseif($menu=="视频中心"){

            $video_sql = "select video_body,video_title,video_time,video_picture from video WHERE video_type='$type'";
            $result_video = $pdo->query($video_sql)->fetchAll();;
            if($result_video!=null){


                $sql_menu = "select $menu from menu WHERE $menu IS NOT NULL";
                $result_menu =  $pdo->query($sql_menu)->fetchAll();
                ?>
                <div class="cate">

                    <?php

                    foreach ($result_menu as $item) {
                            ?>
                            <a class="aw" href="contentbk.php?menu=<?php echo $menu . '&type=' . $item[$menu] ?>" ><?php echo $item[$menu] ?></a>
                            <?php

                    }

                    ?>
                </div>

                    <div id="list">
                        <ul>
                            <?php


                                foreach ($result_video as $value) {

                                ?>
                            <li>
                                <div class="wrap" style="width: 100%">
                                    <a href="<?php echo $value['video_body']?>" target="_blank">
                                        <div class="list_litpic fl"><img src="<?php echo "/../admin/".$value['video_picture']?>"/></div>
                                        <div class="list_info">
                                            <h4><?php echo $value['video_title']; ?></h4>
                                            <h5><?php echo $value['video_time']?></h5>
                                        </div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                                    <?php
                                }
                                    ?>
                        </ul>
                    </div>

                    <?php

                $result_video=null;
                $result_menu=null;
                $pdo=null;
            }
        }else {

            $sql_menu = "select $menu from menu WHERE $menu IS NOT NULL";
            $sql_type = "select information_id,information_title,information_time ,information_class from information WHERE information_type='$type'";
            $result_menu = $pdo->query($sql_menu);
            $result_type = $pdo->query($sql_type);
            if ($result_menu == null ) {
                //跳转主页
            } else {
                $flag = "false";
               foreach($result_menu as $item){

                   if ($type == $item[$menu]) {
                       $flag = "true";
                   }

               }
                if ($flag == "false") {
                    //跳转主页

                } else {
                    $result_type = $pdo->query($sql_type);
                    $result_menu = $pdo->query($sql_menu);
                    ?>
                    <div class="cate">
                        <?php
                        foreach ($result_menu as $item) {

                                ?>
                                <a class="aw" href="contentbk.php?menu=<?php echo $menu . '&type=' . $item[$menu] ?>" ><?php echo $item[$menu] ?></a>
                                <?php

                        }
                        ?>
                    </div>


                    <div class="con" >
                        <ul>
                            <?php
                            foreach ($result_type as $item) {
                                ?>
                                <li style=""><span><?php echo $item['information_time']?></span><a  class="alist"
                                                                                           vhref="Detail.php?information_id=<?php echo $item['information_id'] ?>"
                                                                                           ><?php echo $item['information_title'] ?></a>
                                </li>

                                <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <?php
                    $result_type=null;
                    $result_menu=null;
                    $pdo=null;
                }

            }
        }

        ?>
        <?php

        ?>
        <p align="center">
            <a href="">上一页</a>
            <a href="">下一页</a>
        </p>

    </div>

</div>

<div class="push_msk"></div>
</div>
<div id="newwrap_t" class="newwrap">
    <div class="newwrap_msk"></div>
    <iframe id="newwrap" frameborder="0" width="100%" height="100%"></iframe>
</div>

<div class="loading_dark" id="loading_dark"></div>
<div id="loading_mask">
    <div class="loading_mask">
        <ul class="anm">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>

<script language="javascript" src="js/zepto.min.js"></script>
<script language="javascript" src="js/fx.js"></script>
<script language="javascript" src="js/script.js"></script>

</body>
</html>