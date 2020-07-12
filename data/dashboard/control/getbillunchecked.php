<?php
include_once '../../model/DbConnection.php';
include_once '../../model/BillDAO.php';
$connect = DbConnection::make();
$getBill = new BillDAO($connect);
$billList = $getBill->billListUnChecked();
$_SESSION['listBill'] = $billList;
?>