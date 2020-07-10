<?php
require_once '../model/DbConnection.php';
require_once '../model/cartDAO.php';
session_start();
$connect = DbConnection::make();
$getCart = new CartDAO($connect);
$cart = $getCart->showCart($_SESSION['user']['iduser']);
$_SESSION['cart'] = $cart;
if ($_SESSION['user']['isAdmin']=='true'){
    header("Location: http://localhost/CODEGYM/caseStudy2/data/dashboard/index.php");
}else {
    header('Location: http://localhost/CODEGYM/caseStudy2/index.php');
}

?>