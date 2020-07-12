<?php
require_once '../model/DbConnection.php';
require_once '../model/billDAO.php';
session_start();
$connect = DbConnection::make();
$creatBill = new BillDAO($connect);
$getIdBill = $creatBill->addBill($_SESSION['user']['iduser'],$_SESSION['bill'],$_SESSION['total']);
$idbill = (int)$getIdBill['idbill'];
$creatBill->addBillDetail($_SESSION['cartItem'],$idbill);
$_SESSION['cart']=[];
header('Location: http://localhost/CODEGYM/caseStudy2/data/view/thanksforbuy.php')
?>