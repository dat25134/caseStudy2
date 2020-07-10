<?php
class UserDAO
{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function login(User $user)
    {
        $sql = "Select * from product.user where iduser = ? and password = MD5(?) limit 1";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $user->iduser);
        $statement->bindParam(2, $user->password);
        $statement->execute();
        $result = $statement->rowCount();
        return $result;
    }
    public function infoUser(User $user){
        $sql = "Select * from user where iduser = ? and password = MD5(?) limit 1";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $user->iduser);
        $statement->bindParam(2, $user->password);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetch();
        return $result;
    }
    public function changePass($iduser, $newpass){
        $sql = "UPDATE `product`.`user` SET `password` = ? WHERE (`iduser` = ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $newpass);
        $statement->bindParam(2, $iduser);
        $statement->execute() or die("<script> alert('Đổi pass không thành công')</script>");
        return  0;
    }
    public function countUser(){
        $sql = "SELECT iduser FROM product.user";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetch();
        return $result;
    }
}