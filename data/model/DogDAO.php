<?php
class DogDAO
{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function showItem(){
        $sql = "SELECT * FROM product.images right join dog on	dog.idDog = images.idDog group by dog.idDog";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }

    public function isHot(){
        $sql = "SELECT * FROM product.images right join dog on	dog.idDog = images.idDog where ishot = 1 group by dog.idDog ";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }

    public function banchay(){
        $sql = "SELECT * FROM product.images right join dog on	dog.idDog = images.idDog where banchay = 1 group by dog.idDog ";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }

    public function images($idDog){
        $sql = "SELECT ten,imageURL,dog.idDog FROM product.images 
        inner join dog
        on dog.idDog = images.idDog
        where images.idDog = $idDog";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }

    public function editDog($idDog,$ten,$nguongoc,$dacdiem,$cannang,$tuoitho,$isHot,$banChay,$isHave,$price,$sale,$isdel){
        $sql =  "UPDATE `product`.`dog` SET `ten` = ?, `nguongoc` = ?, `dacdiem` = ?, `cannang` = ?, `tuoitho` = ?, `isHot` = $isHot, `banChay` = $banChay, `isHave` = $isHave, `price` = ?, `sale` = ?, `isdel` = $isdel WHERE (`idDog` = ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $ten);
        $statement->bindParam(2, $nguongoc);
        $statement->bindParam(3, $dacdiem);
        $statement->bindParam(4, $cannang);
        $statement->bindParam(5, $tuoitho);
        $statement->bindParam(6, $price);
        $statement->bindParam(7, $sale);
        $statement->bindParam(8, $idDog);
        $statement->execute();
    }

    public function delDog($idDog){
        $sql =  "UPDATE `product`.`dog` SET `isdel` = 1 WHERE (`idDog` = ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $idDog);
        $statement->execute();
    }

    public function addDog($ten,$nguongoc, $dacdiem, $cannang,$tuoitho,$ishot,$banChay, $isHave,$price,$sale, $isdel){
        $sql = "INSERT INTO `product`.`dog` (`ten`, `nguongoc`, `dacdiem`, `cannang`, `tuoitho`, `isHot`, `banChay`, `isHave`, `price`, `sale`, `isdel`) VALUES (?, ?, ?, ?, ?,$ishot, $banChay, $isHave, ?, ?, $isdel)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $ten);
        $statement->bindParam(2, $nguongoc);
        $statement->bindParam(3, $dacdiem);
        $statement->bindParam(4, $cannang);
        $statement->bindParam(5, $tuoitho);
        $statement->bindParam(6, $price);
        $statement->bindParam(7, $sale);
        $statement->execute();
    }
}