<?php 
// 1.資料清洗

// 2.新增資料

// 1.資料清洗
include "../../class/base.php";
$data = $_GET;
$teachers = new DB('teachers');

$teachers->rollbackFun();



?>


