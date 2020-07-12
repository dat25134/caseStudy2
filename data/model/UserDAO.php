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
        $sql = "SELECT * FROM product.user";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }
    
    public function editUser($iduser,$pass,$isAdmin,$firstName,$lastName,$status){
        $sql = "UPDATE `product`.`user` SET `password` = ?, `isAdmin` = ?, `firstName` = ?, `lastName` = ?, `status` = ? WHERE (`iduser` = ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $pass);
        $statement->bindParam(2, $isAdmin);
        $statement->bindParam(3, $firstName);
        $statement->bindParam(4, $lastName);
        $statement->bindParam(5, $status);
        $statement->bindParam(6, $iduser);
        $statement->execute();
    }

    public function banedUser($iduser){
        $sql = "UPDATE `product`.`user` SET `status` = 'baned' WHERE (`iduser` = ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $iduser);
        $statement->execute();
    }

    public function addUser($iduser,$pass,$isAdmin,$firstName,$lastName,$status){
        $sql = "INSERT INTO `product`.`user` (`iduser`, `password`, `isAdmin`, `firstName`, `lastName`, `status`) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $iduser);
        $statement->bindParam(2, $pass);
        $statement->bindParam(3, $isAdmin);
        $statement->bindParam(4, $firstName);
        $statement->bindParam(5, $lastName);
        $statement->bindParam(6, $status);
        $statement->execute();
    }

    public function searchUser($searchText){
        $sql = "SELECT * FROM product.user where iduser like ?";
        $statement = $this->pdo->prepare($sql);
        $searchText = "%".$searchText."%";
        $statement->bindParam(1, $searchText);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }
}