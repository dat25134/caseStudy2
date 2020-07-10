<?php
require_once '../model/DbConnection.php';
require_once '../model/cartDAO.php';
session_start();
$connect = DbConnection::make();
$getCartItem = new CartDAO($connect);
$cartItem = $getCartItem->showCartItem($_SESSION['user']['iduser']);
$_SESSION['cartItem'] = $cartItem;
header('Location: http://localhost/CODEGYM/caseStudy2/data/view/cartdetail.php')
?>