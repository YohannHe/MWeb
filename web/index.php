<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>浙江商业职业技术学院外国语学院</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">

</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<div id="menu" >
    <ul id="menuList">

        <li class="nav_index menu_cur" id="1"><a id="menu_a" class="alist" href="index.php"><i></i><span>首页</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index" id="1"><a id="menu_a" class="alist" vhref="content.php?menu=学院介绍&type=专业介绍"><i></i><span>学院介绍</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index" id="1"><a id="menu_a" class="alist" vhref="content.php?menu=教学信息&type=培养方案"><i></i><span>教学信息</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index" id="1"><a id="menu_a" class="alist" vhref="content.php?menu=就业中心&type=政策文件"><i></i><span>就业中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index" id="1"><a id="menu_a" class="alist" vhref="content.php?menu=学习中心&type=等级考试"><i></i><span>学习中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index" id="1"><a id="menu_a" class="alist" vhref="content.php?menu=视频中心&type=学习视频"><i></i><span>视频中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index" id="1"><a id="menu_a" class="alist" vhref="content.php?menu=管理中心&type=班级管理"><i></i><span>管理中心</span><b></b><div class="clear"></div></a></li>
        <li class="nav_index" id="1"><a id="menu_a" class="alist" vhref="content.php?menu=服务中心&type=生活服务"><i></i><span>服务中心</span><b></b><div class="clear"></div></a></li>

    </ul>
</div>


<script>

</script>
<style>

    @media screen and (min-width: 640px){

        #header .search_open {
            background-position: -107px -441px;
            right:0%;
            width: 35px;
            top: 10px
        }
        #header{
            width: 640px;
            margin: 0 auto;
        }
        #container{
            width: 640px;
            margin: 0 auto;
        }
    }


</style>

<div id="header" style="height: 50px;" >
    <div style="display: inline; line-height: 50px;">
        
            <img src="images/&#x5fae;&#x7f51;&#x9875;_02.png" width="640" height="69" alt="" style="max-width: 100%;max-height: 100%"></td>
        
    </div>
    <i class="search_open"  ></i>
    <!--    <div class="logo_msk"></div>-->
</div>
<style>


    @media screen and (max-width: 640px) {
        table {

            width: 100%;
            margin:0 auto;
            border: none;
            border-collapse: collapse;
        }
        table img{
            max-width:100%;
            max-height: 50%;
        }

    }
    @media screen and (min-width: 640px){

        table{
            margin: 0 auto;

        }
        table img{
            max-width:100%;
            height: 100%;
        }
        #container{
            width: 640px;
            margin: 0 auto;
        }

    }
<?php

    require_once 'DataBaseConnection.php';
    $sql = "SELECT * from menu ";
    $result = $pdo->query($sql)->fetchAll();


?>

</style>
<div id="container">
    <div >
        <table id="__01"  cellspacing="0">

                <td colspan="14">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_03.png" width="640" height="363" alt=""></td>
            </tr>
            <tr>
                <td colspan="14">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_04.png" width="640" height="62" alt=""></td>
            </tr>
            <tr>
                <td colspan="6">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_05.png" width="265" height="150" alt=""></td>
                <td colspan="4">
                    <a  class="alist" vhref="content.php?type=通知公告""><img src="images/&#x5fae;&#x7f51;&#x9875;_06.png" width="180" height="150" alt="通知公告"></a></td>
                <td colspan="3">
                    <a  class="alist" vhref="content.php?menu=学习中心&type=<?php echo $result[0]['学习中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_07.png" width="179" height="150" alt="学习中心"></td>
                <td rowspan="2">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_08.png" width="16" height="299" alt=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_09.png" width="47" height="149" alt=""></td>
                <td colspan="2">
                    <a  class="alist" vhref="content.php?menu=视频中心&type=<?php echo $result[0]['视频中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_10.png" width="187" height="149" alt="视频中心"></a></td>
                <td>
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_11.png" width="1" height="149" alt=""></td>
                <td colspan="3">
                    <a class="alist" vhref="content.php?menu=管理中心&type=<?php echo $result[0]['管理中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_12.png" width="186" height="149" alt="管理中心"></a></td>
                <td colspan="3">
                    <a  class="alist" vhref="content.php?menu=服务中心&type=<?php echo $result[0]['服务中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_13.png" width="187" height="149" alt="服务中心"></td></a>
                <td colspan="2">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_14.png" width="16" height="149" alt=""></td>
            </tr>
            <tr>
                <td colspan="14">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_15.png" width="640" height="87" alt=""></td>
            </tr>
            <tr>
                <td colspan="14">
                    <a class="alist" vhref="content.php?menu=学院介绍&type=<?php echo $result[0]['学院介绍']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_16.png" width="640" height="297" alt="学院介绍"></a></td>
            </tr>
            <tr>
                <td colspan="14">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_17.png" width="640" height="40" alt=""></td>
            </tr>
            <tr>
                <td rowspan="3">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_18.png" width="27" height="474" alt=""></td>
                <td colspan="2">
                    <a class="alist" vhref="content.php?menu=教学信息&type=<?php echo $result[0]['教学信息']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_19.png" width="173" height="217" alt="教学信息"></a></td>
                <td colspan="2" rowspan="3">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_20.png" width="35" height="474" alt=""></td>
                <td colspan="2">
                    <a class="alist" vhref="content.php?menu=就业中心&type=<?php echo $result[0]['就业中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_21.png" width="173" height="217" alt="招生就业"></td>
                <td colspan="2" rowspan="3">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_22.png" width="34" height="474" alt=""></td>
                <td colspan="3">
                    <a class="alist" vhref="content.php?menu=就业中心&type=<?php echo $result[1]['就业中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_23.png" width="173" height="217" alt="招聘信息"></a></td>
                <td colspan="2" rowspan="3">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_24.png" width="25" height="474" alt=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_25.png" width="173" height="39" alt=""></td>
                <td colspan="2">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_26.png" width="173" height="39" alt=""></td>
                <td colspan="3">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_27.png" width="173" height="39" alt=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a class="alist" vhref="content.php?menu=就业中心&type=<?php echo $result[2]['就业中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_28.png" width="173" height="218" alt="校友精英"></td>
                <td colspan="2">
                    <a class="alist" vhref="content.php?menu=学习中心&type=<?php echo $result[1]['学习中心']?>"><img src="images/&#x5fae;&#x7f51;&#x9875;_29.png" width="173" height="218" alt="等级考试"></td>
                <td colspan="3">
                    <a class="alist" vhref="content.php?menu=学习中心&type=<?php echo $result[2]['学习中心']?>"> <img src="images/&#x5fae;&#x7f51;&#x9875;_30.png" width="173" height="218" alt="外语俱乐部"></td>
            </tr>
            <tr>
                <td colspan="14">
                    <img src="images/&#x5fae;&#x7f51;&#x9875;_31.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="27" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="20" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="153" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="34" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="1" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="30" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="143" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="13" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="21" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="3" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="163" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="7" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="9" height="1" alt=""></td>
                <td>
                    <img src="images/&#x5206;&#x9694;&#x7b26;.gif" width="16" height="1" alt=""></td>
            </tr>
        </table>
    </div>

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
<script language="javascript" src="js/script.js"></script
</body>
</html>