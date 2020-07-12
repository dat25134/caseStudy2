<?php
include_once "../../model/DbConnection.php";
include_once "../../model/UserDAO.php";
$connect = DbConnection::make();
$searchtUser = new UserDAO($connect);
$listUser = $searchtUser->searchUser($_GET['search']);
$_SESSION['listUser'] = $listUser;
?>