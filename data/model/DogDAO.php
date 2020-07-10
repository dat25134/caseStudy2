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
}