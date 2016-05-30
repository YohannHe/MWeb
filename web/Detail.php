<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="viewport" content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script>
var logined = 0
</script>
<title>浙江商业职业技术学院外国语学院</title>
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
		#title-img{
			max-width:100%;
			height: 100%;
		}
		#header{
			height: 50px;
		}
		#content img{
			max-width:100%;
			max-height: 50%;
		}
		hr{
			border: 1px dotted #ccc;
		}

	</style>
</head>
<body>
	<div id="header">
			<i class="menu_back"><a href="index.php"></a></i>
			<div style="display: inline; line-height: 50px;">
					<img  id ="title-img"src="images/&#x5fae;&#x7f51;&#x9875;_02.png"  width="640" height="69"   alt="" >
			</div>

	</div>

<div id="container">
	<div id="content">
		<p align="center">
			<img id="timg" src="images/title.jpg"  alt="">
		</p>

		<p></br></p>


		<?php
		@$information_id=$_GET[information_id];

		if($information_id!=null){
			require_once "DataBaseConnection.php";
			if($information_id=='school_survey'||$information_id=='school_team') {
				$item_1=$information_id.'_count';
				$item_2=$information_id.'_time';
				$sql = "select $information_id,$item_1,$item_2 from school";

				if(($result_school = $pdo->query($sql))!=null){
					$result_school =$result_school->fetch();
				if ($information_id == 'school_survey') {
				?>
				<p align="center">学院概况</p>
					<br>
					<?php
					$count_sql = "update school set school_survey_count=school_survey_count+1 ";
					$pdo->exec($count_sql);
					?>
					<p align="center" style="font-size: 9px">时间:<?php echo $result_school['school_survey_time']?>&nbsp;&nbsp;浏览次数:<?php echo $result_school['school_survey_count']?>&nbsp;&nbsp;来源:本站</p>
					<hr />
					<br>
				<?php
				}else{
					?>
					<p align="center">教学团队</p>
					<br>
					<?php
					$count_sql = "update school set school_team_count=school_team_count+1 ";
					$pdo->exec($count_sql);
					?>
					<p align="center" style="font-size: 9px">时间:<?php echo $result_school['school_team_time']?>&nbsp;&nbsp;浏览次数:<?php echo $result_school['school_team_count']?>&nbsp;&nbsp;来源:本站</p>
					<hr />
					<br>
					<?php
				}


					$result_school = $pdo->query($sql)->fetch();
					?>
						<div class="pd5">
					<?php
					echo $result_school[$information_id];
					?>
						</div>

					<?php

				}



			}else{
				$sql = "select information_time,information_count,information_body,information_title from information WHERE information_id=$information_id";
				$result_information = $pdo->query($sql)->fetch();
				?>
				<p align="center"><?php echo $result_information['information_title']?></p>
				<br>
				<?php
					$count_sql = "update information set information_count=information_count+1 where information_id=$information_id";
					$pdo->exec($count_sql);
				?>
				<p align="center" style="font-size: 9px">时间:<?php echo $result_information['information_time']?>&nbsp;&nbsp;浏览次数:<?php echo $result_information['information_count']?>&nbsp;&nbsp;来源:本站</p>
				<hr />
				<br>

				<div class="pd5">
					<?php
					echo  $result_information["information_body"];
					?>
				</div>

				<?php



				$result_information = null;
				$pdo = null;
			}

		}

		?>



		<p></br></p>
		<p></br></p>

	</div>
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