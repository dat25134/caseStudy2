<?php
require_once '../model/DbConnection.php';
require_once '../model/User.php';
require_once '../model/UserDAO.php';
if (isset($_REQUEST['email']) && isset($_REQUEST['password'])){
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $connect = DbConnection::make();
    $login = new UserDAO($connect);
    $user = new User($email,$pass);
    $result = $login->login($user);
    $infoUser = $login->infoUser($user);
    if ($result){
        session_start();
        $_SESSION['user'] = $infoUser;
        $_SESSION['login1st'] = true;
        header("Location: http://localhost/CODEGYM/caseStudy2/data/control/showcart.php");
    }else{
        echo "Đăng nhập không thành công";
    }
}
