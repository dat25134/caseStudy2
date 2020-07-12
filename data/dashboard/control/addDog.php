<?php
include_once "../../model/DbConnection.php";
include_once "../../model/DogDAO.php";
$connect = DbConnection::make();
$addDog = new DogDAO($connect);
$addDog->addDog($_GET['ten'],$_GET['nguongoc'],$_GET['dacdiem'],$_GET['cannang'],$_GET['tuoitho'],(int)$_GET['isHot'],(int)$_GET['banChay'],(int)$_GET['isHave'],$_GET['price'],$_GET['sale'],(int)$_GET['isdel']);
header("Location: " .$_SERVER['HTTP_REFERER']);
?>