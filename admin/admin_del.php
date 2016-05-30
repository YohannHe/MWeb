<?php
require_once 'config.php';
require_once 'funcitons.php';
connectDB();

$admin_id = $_GET['admin_id'];
$sql = "DELETE FROM admin WHERE admin_id='$admin_id'";
$pdo->exec($sql);
$pdo = null;
header("location:admin_list.php");
