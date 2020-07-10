<?php
require_once '../model/DbConnection.php';
require_once '../model/cartDAO.php';
session_start();
if (isset($_SESSION['user'])) {
    $connect = DbConnection::make();
    $addCart = new CartDAO($connect);
    $addCart->addToCart($_SESSION['user']['iduser'],$_GET['iddog']);
    $cart = $addCart->showCart($_SESSION['user']['iduser']);
    $_SESSION['cart'] = $cart;
    header("Location: " .$_SERVER['HTTP_REFERER']);
}else {
    header("Location: http://localhost/CODEGYM/caseStudy2/data/view/login.php?log=0");
}

?>