<?php
include_once '../../model/DbConnection.php';
include_once '../../model/BillDAO.php';
$connect = DbConnection::make();
$checked = new BillDAO($connect);
$checked->ispay($_GET['idbill']);
header("Location: " .$_SERVER['HTTP_REFERER']);
?>