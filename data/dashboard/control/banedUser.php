<?php
include_once "../../model/DbConnection.php";
include_once "../../model/UserDAO.php";
$connect = DbConnection::make();
$delUser = new UserDAO($connect);
$delUser->banedUser($_GET['iduser']);
header("Location: " .$_SERVER['HTTP_REFERER']);
?>