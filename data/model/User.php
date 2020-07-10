<?php
class User
{
    public $iduser;
    public $password;
    public $firstName;
    public $lastName;
    public $dateReg;
    public function __construct($iduser, $password, $firstName="" , $lastName="",$dateReg="")
    {
        $this->iduser = $iduser;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateReg = $dateReg;
    }
}