<?php
class CartDAO
{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function showCart($user){
        $sql = "SELECT * FROM product.giohang WHERE iduser = '$user'";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }
    public function addToCart($id, $idDog){
        $sql = "INSERT INTO `product`.`giohang` (`iduser`, `idDog`) VALUES (? , ?);";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->bindParam(2, $idDog);
        $statement->execute();
    }

    public function showCartItem($user){
        $sql = "SELECT *,count(idDog) as SL FROM product.cart where iduser = '$user' group by idDog order by ten";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }

    public function deleteCartItem($user,$idDog){
        $sql = "DELETE FROM `product`.`giohang` WHERE (`iduser`= '$user' and `idDog` = '$idDog')";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}