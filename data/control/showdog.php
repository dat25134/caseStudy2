<?php
require_once 'data/model/DbConnection.php';
require_once 'data/model/DogDAO.php';
$connect = DbConnection::make();
$getDog = new DogDAO($connect);
$dogList = $getDog->showItem();
$typeDog = [];
foreach ($dogList as $val){
    if ($val['isdel']==0){
        array_push($typeDog,$val);
    }
}
$_SESSION['typeDog'] = $typeDog;
?>