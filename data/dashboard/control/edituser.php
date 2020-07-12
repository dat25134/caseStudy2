<?php
include_once "../../model/DbConnection.php";
include_once "../../model/UserDAO.php";
$connect = DbConnection::make();
$editUser = new UserDAO($connect);
$editUser->editUser($_GET['iduser'],md5($_GET['password']),$_GET['isAdmin'],$_GET['firstName'],$_GET['lastName'],$_GET['status']);
header("Location: " .$_SERVER['HTTP_REFERER']);
?>