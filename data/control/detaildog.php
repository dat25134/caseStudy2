<?php
session_start();
$idDog = $_GET['id'];
require_once '../model/DbConnection.php';
require_once '../model/DogDAO.php';
$connect = DbConnection::make();
$getDog = new DogDAO($connect);
$image_array = $getDog->images($idDog);
$_SESSION['images'] = $image_array;
header('Location: http://localhost/CODEGYM/caseStudy2/data/view/detailDog.php')
?>