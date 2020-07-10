<?php
require_once '../model/DbConnection.php';
require_once '../model/User.php';
require_once '../model/UserDAO.php';
session_start();
$pass = $_SESSION['user']['password'];
if ($pass != md5($_REQUEST['oldpass'])) {
    echo "<script>alert('Mật khẩu cũ không đúng')</script>";
    echo "<a href='http://localhost/CODEGYM/caseStudy2/data/view/changePass.php'>Trở lại trang trước</a>";
} else {
    $newpass = md5($_REQUEST['newpass']);
    $connect = DbConnection::make();
    $iduser = $_SESSION['user']['iduser'];
    $changePass = new UserDAO($connect);
    $result = $changePass->changePass($iduser,$newpass);
    if ($result===0) {
        unset($_SESSION['user']);
        echo "<script>alert('Đổi mật khẩu thành công')</script>";
        echo "<a href='http://localhost/CODEGYM/caseStudy2/data/view/login.php'>Trở lại trang đăng nhập</a>";
    } else {
        echo "Đổi mật khẩu không thành công";
        echo "<a href='http://localhost/CODEGYM/caseStudy2/data/view/login.php'>Trở lại trang trước</a>";
    }
}

