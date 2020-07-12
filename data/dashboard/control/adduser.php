<?php
include_once "../../model/DbConnection.php";
include_once "../../model/UserDAO.php";
$connect = DbConnection::make();
$addUser = new UserDAO($connect);
$addUser->addUser($_POST['email'],md5($_POST['pass']),$_POST['isAdmin'],$_POST['firstName'],$_POST['lastName'],$_POST['status']);
header("Location: " .$_SERVER['HTTP_REFERER']);
?>