<?php
include_once '../../model/DbConnection.php';
include_once '../../model/DogDAO.php';
$connect = DbConnection::make();
$getDog = new DogDAO($connect);
$dogList = $getDog->showItem();
$_SESSION['listDog'] = $dogList;
?>