<?php
class DbConnection{
    public static function make(){
        try {
            return new PDO('mysql:host=localhost;dbname=product;charset=utf8', 'root', 'Dat25134', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}


?>