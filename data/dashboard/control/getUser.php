<?php
include_once '../../model/DbConnection.php';
include_once '../../model/UserDAO.php';
$connect = DbConnection::make();
$getUser = new UserDAO($connect);
$UserList = $getUser->countUser();
$_SESSION['listUser'] = $UserList;
?>