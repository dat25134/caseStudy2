<?php
require_once 'data/model/DbConnection.php';
require_once 'data/model/DogDAO.php';
$connect = DbConnection::make();
$getDog = new DogDAO($connect);
$ishot = $getDog->isHot();
$_SESSION['ishot'] = $ishot;
?>