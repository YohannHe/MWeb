<?php
require_once 'config.php';
require_once 'funcitons.php';
connectDB();

$information_id = $_GET['information_id'];
$information_type = $_GET['information_type'];
$sql = "DELETE FROM information WHERE information_id='$information_id'";
$pdo->exec($sql);
$pdo =null;
header("location:information_list.php?information_type=$information_type");
