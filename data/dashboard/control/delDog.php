<?php
include_once "../../model/DbConnection.php";
include_once "../../model/DogDAO.php";
$connect = DbConnection::make();
$editDog = new DogDAO($connect);
$editDog->delDog($_GET['idDog']);
header("Location: " .$_SERVER['HTTP_REFERER']);
?>