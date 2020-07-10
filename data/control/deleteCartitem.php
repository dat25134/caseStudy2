<?php
require_once '../model/DbConnection.php';
require_once '../model/cartDAO.php';
session_start();
$connect = DbConnection::make();
$deleteCartItem = new CartDAO($connect);
$deleteCartItem->deleteCartItem($_SESSION['user']['iduser'],$_GET['idDog']);
$cart = $deleteCartItem->showCart($_SESSION['user']['iduser']);
$_SESSION['cart'] = $cart;
$cartItem = $deleteCartItem->showCartItem($_SESSION['user']['iduser']);
$_SESSION['cartItem'] = $cartItem;
header('Location: http://localhost/CODEGYM/caseStudy2/data/view/cartdetail.php')
?>