<?php
include_once '../model/UserDAO.php';
include_once '../model/DbConnection.php';
include_once '../model/billDAO.php';
$connect = DbConnection::make();
$getUser = new UserDAO($connect);
$listUser = $getUser->countUser();
$getbill = new BillDAO($connect);
$listBill = $getbill->billList();


