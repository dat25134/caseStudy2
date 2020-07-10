<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="header">
    <div class="part1">
        <div class="header_left">
            <img src="http://localhost/CODEGYM/caseStudy2/images/logo.png" alt="">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube-play"></i>
            <a href="http://localhost/CODEGYM/caseStudy2/index.php">HOME</a>
        </div>
        <div class="header_right">
            <a href=""><i class="fa fa-address-card-o"></i> ABOUT</a>
            <a href=""><i class="fa fa-envelope-o"></i> CONTACT</a>
            <?php
            if (isset($_SESSION['user'])) : ?>
                <div class="dropdown">
                    <a class="dropbtn"><i class="fa fa-user" aria-hidden="true"></i> <?php echo "Chào " . $_SESSION['user']['firstName'] . " " . $_SESSION['user']['lastName']; ?></a>
                    <div class="dropdown-content">
                        <a href="http://localhost/CODEGYM/caseStudy2/data/view/infoAcc.php">Thông tin tài khoản</a>
                        <a href="">Lịch sử mua hàng</a>
                        <a href="http://localhost/CODEGYM/caseStudy2/data/view/changePass.php">Đổi mật khẩu</a>
                        <a href="http://localhost/CODEGYM/caseStudy2/data/control/logout.php">Đăng xuất</a>
                    </div>
                </div>
                <a class="giohang" href="http://localhost/CODEGYM/caseStudy2/data/control/getitemcart.php">
                    <i class="fa fa-cart-plus"></i>
                    <div><?php echo count($_SESSION['cart']); ?></div>
                </a>
            <?php else : ?>
                <a href="http://localhost/CODEGYM/caseStudy2/data/view/login.php"> <i class="fa fa-hand-o-right"></i> LOGIN</a>
            <?php endif ?>
        </div>
    </div>
</div>