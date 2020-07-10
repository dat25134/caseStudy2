<?php
session_start();
include "../header.php";
?>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_info.css">
<div class="info">
    <h2>Thông tin cá nhân</h2>
    <h4>Thông tin cơ bản, như tên và ảnh của bạn, mà bạn sử dụng trên các dịch vụ của YeuPet.com</h4>
    <div class="content">
        <h3>Hồ sơ</h3>
        <h4>Một số thông tin có thể hiển thị cho những người khác đang sử dụng dịch vụ của YeuPet.com.</h4>
        <div class="row">
            <label for="">Ảnh</label>
            <p>Thêm ảnh để cá nhân hóa tài khoản của bạn</p>
        </div>
        <div class="row">
            <label for="">Tên</label>
            <p><?php echo $_SESSION['user']['firstName']." ".$_SESSION['user']['lastName']?></p>
        </div>
        <div class="row">
            <label for="">Ngày đăng ký</label>
            <p><?php echo $_SESSION['user']['dateReg']?></p>
        </div>
        <div class="row">
            <label for="">Mật khẩu</label>
            <p>******************** <a href="changePass.php" style="margin-left:100px;">Đổi mật khẩu</a></p>
        </div>
        <div class="row">
            <label for="">Thông tin liên hệ</label>
            <p><?php echo $_SESSION['user']['iduser']?></p>
        </div>
    </div>
    <a href="http://localhost/CODEGYM/caseStudy2/index.php"> Quay trở lại trang chủ </a>
</div>
<?php include "../footer.php";?>