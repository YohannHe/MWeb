<?php
require_once "config.php";
try{
    Global $pdo;
    $pdo = new PDO(DSN,MYSQL_USER,MYSQL_PW);
    $pdo->exec("SET names utf8");
}catch (PDOException $e){
    die("数据库连接失败!".$e->getMessage());
}

