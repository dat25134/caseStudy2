<?php
class BillDAO
{
    public $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function showBill($user){
        $sql = "SELECT * FROM product.giohang WHERE iduser = '$user'";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetchAll();
        return $result;
    }
    public function addBill($iduser, $infoBill,$total){
        $sql = "INSERT INTO `product`.`bill` (`iduser`, `fullname`, `tinh`, `quan`, `diachi`, `sdt`, `total`,`date`) VALUES (?, ?, ?, ?, ?, ?, ?, now())";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $iduser);
        $statement->bindParam(2, $infoBill['fullname']);
        $statement->bindParam(3, $infoBill['tinh']);
        $statement->bindParam(4, $infoBill['huyen']);
        $statement->bindParam(5, $infoBill['diachi']);
        $statement->bindParam(6, $infoBill['sdt']);
        $statement->bindParam(7, $total);
        $statement->execute();
        $sql = " SELECT idbill FROM product.bill order by idbill desc limit 1";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC); 
        $result =$statement->fetch();
        $sql = "DELETE FROM `product`.`giohang` WHERE (`iduser` = '$iduser')";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $result;
    }

    public function addBillDetail($cart,$idbill){
        foreach ($cart as $value){
            $sql = "INSERT INTO `product`.`billdetail` (`idDog`, `idbill`, `sl`,`priceunit`,`sale`,`total`) VALUES (?, ?, ?,?,?,?)";
            $statement = $this->pdo->prepare($sql);
            $statement->bindParam(1, $value['idDog']);
            $statement->bindParam(2, $idbill);
            $statement->bindParam(3, $value['SL']);
            $statement->bindParam(4, $value['price']);
            $statement->bindParam(5, $value['sale']);
            $total = $value['price']*$value['SL']*(100-$value['sale'])/100;
            $statement->bindParam(6, $total);
            $statement->execute();
            
        }
        
    }

}