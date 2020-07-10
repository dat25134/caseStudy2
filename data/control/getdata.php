<?php
$filename = "myProducts.json";
$contact = json_decode(file_get_contents($filename));
$dns = "mysql:host=localhost;dbname=product";
$username = "root";
$password = "Dat25134";
$conect = new PDO($dns,$username,$password);
$i = 0;
while ($i<count($contact)){
    $img = $contact[$i]->image;
    $img = str_replace("http://localhost:4444/","",$img);
    $query = "INSERT INTO `product`.`product` (`ID`, `name`, `price`, `img`) VALUES ('SP$i', '".$contact[$i]->name."','" .$contact[$i]->price."','" . $img."')";
    $conect->query($query);
    $i++;
}
?>