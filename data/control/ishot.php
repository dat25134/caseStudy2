<?php
require_once 'data/model/DbConnection.php';
require_once 'data/model/DogDAO.php';
$connect = DbConnection::make();
$getDog = new DogDAO($connect);
$select = $getDog->isHot();
$ishot =[];
foreach ($select as $val){
    if ($val['isdel'] == 0) array_push($ishot,$val);
}
$_SESSION['ishot'] = $ishot;
?>