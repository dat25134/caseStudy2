<?php
require_once 'data/model/DbConnection.php';
require_once 'data/model/DogDAO.php';
$connect = DbConnection::make();
$getDog = new DogDAO($connect);
$listDog = $getDog->banchay();
$banchay = [];
foreach ($listDog as $val){
    if ($val['isdel']==0){
        array_push($banchay,$val);
    }
}
$_SESSION['banchay'] = $banchay;
?>