<?php
include_once "connectDatabase.php";
$addUser = $connect->prepare("INSERT INTO `product`.`user` (`iduser`, `password`, `firstName`, `lastName`) VALUES (:iduser, :password , :firstName, :lastName)");
 if ($_SERVER['REQUEST_METHOD']=="POST"){
    if (isset($_REQUEST['first_name'])){
        $addUser->bindParam(':iduser', $id);
        $addUser->bindParam(':password', $pass);
        $addUser->bindParam(':firstName', $firstName);
        $addUser->bindParam(':lastName', $lastName); 
        $id = $_REQUEST['email'];
        $pass = md5($_REQUEST['pass']);
        $firstName = $_REQUEST['first_name'];
        $lastName = $_REQUEST['last_name'];
        $regPage = "<a href='../view/register.php'>Quay lại trang đăng ký</a>";
        $addUser->execute()or die('<script>alert("Thêm tài Khoản thất bại")</script>'.$regPage);
    }
 }
?>
<script>
    alert("Đăng ký thành công");
</script>
<?php
echo "<a href='../view/login.php'>Quay lại trang đăng nhập</a>";
?>