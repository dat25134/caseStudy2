<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yêu Pet!!!</title>
    <link rel="icon" type="image/svg" sizes="32x32" href="images/dog.svg">
</head>

<body>
    <?php
    if (session_id() === '') session_start();
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user'] && $_SESSION['login1st']) {
            echo "<script>alert('Đăng nhập thành công')</script>";
            $_SESSION['login1st'] = false;
        }
    }
    include_once "data/header.php";
    include_once "data/view/banner.php";
    include_once "data/control/showdog.php";
    include_once "data/view/catalog.php";
    
    ?>
    <div class="intro">
        <div class="intro_left">
            <h2>VỀ CHÚNG TÔI</h2>
            <p><strong>YêuPet.com</strong> là thương hiệu mua bán thú cưng uy tín nhất tại Việt Nam. Với nhiều năm kinh nghiệm chúng tôi sẽ mang đến sự hài lòng cho khách hàng, đáp ứng được những yêu cầu khắt khe nhất của khách hàng! Dịch vụ của chúng tôi gồm có: Mua bán thú cưng, phối giống, phụ kiện, trông giữ, cún nhập ngoại. Với các dòng cún như Poodle, Alaska, Samoyed, Doberman, ChowChow, Chihuahua, Cocker, Bull Pháp, Bulldog, Bắc Hà, Phú Quốc . . . sẽ cho quý khách nhiều sự lựa chọn để tìm được người bạn 4 chân hợp ý.</p>
        </div>
        <div class="intro_right">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/f3R5fGoX6R4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="service">
        <div class="service_left">
            <div class="row">
                <div class="part1">
                    <h2>Bảo hành sức khỏe</h2>
                    <p>Bảo Hành 3 Ngày Toàn Diện - Bảo Hành Sức Khỏe 30 Ngày Với Các Bệnh Trong Tiêm Phòng</p>
                </div>
                <div class="part2"><i class="fa fa-heartbeat"></i></div>
            </div>
            <div class="row">
                <div class="part1">
                <h2>Bảo Hành Thuần Chủng</h2>
                <p>Bảo Hành Thuần Chủng Trọn Đời – Nếu Khách Hàng Nhận Cún Không Thuần Chủng Có Thể Đổi Trả Mọi Lúc</p>
                </div>
                <div class="part2"><i class="fa fa-bell-o"></i></div>
            </div>
            <div class="row">
                <div class="part1">
                <h2>Tặng Phụ Kiên Khi Mua Cún</h2>
                <p>Quý Khách Hàng Sẽ Được Tặng Phụ Kiện Cần Thiết Dành Riêng Cho Từng Loại Cún</p>
                </div>
                <div class="part2"><i class="fa fa-lightbulb-o"></i></div>
            </div>
            <div class="row">
                <div class="part1">
                <h2>Giảm 10% Giá Phụ Kiện</h2>
                <p>Quý Khách Sẽ Được Giảm 10% Khi Mua Phụ Kiện Của Shop (Khuyến Mãi Trọn Đời)</p>
                </div>
                <div class="part2"><i class="fa fa-question-circle-o"></i></div>
            </div>
            <div class="row">
                <div class="part1">
                <h2>Miễn Phí Vận Chuyển</h2>
                <p>Miễn Phí Vận Chuyển Trên Toàn Quốc, Giao Cún Tại Nhà Với Hà Nội Và TP.HCM - Chịu Mọi Trách Nhiệm Trong Quá Trình Vận Chuyển</p>
                </div>
                <div class="part2"><i class="fa fa-road"></i></div>
            </div>
        </div>
        <div class="service_right">
            <div class="row">
                <div class="part1"><i class="fa fa-user-o"></i></div>
                <div class="part2">
                <h2>Tư Vấn Chăm Sóc Trọn Đời</h2>
                <p>Tư Vấn Cách Nuôi, Y Tế, Chăm Sóc, Làm Đẹp, Huấn Luyện, Phối Giống, Sinh Sản . . .</p>
                </div>
            </div>
            <div class="row">
                <div class="part1"><i class="fa fa-file-o"></i></div>
                <div class="part2">
                <h2>Đầy Đủ Giấy Tờ Microchip</h2>
                <p>Hợp Đồng Mua Bán, Giấy Chứng Nhận, Sổ Tiêm Phòng Và Tẩy Giun, Gắn Microchip Chứng Nhận Chủ Sở Hữu Thú Cưng Hợp Pháp . . .</p>
                </div>
            </div>
            <div class="row">
                <div class="part1"><i class="fa fa-balance-scale"></i></div>
                <div class="part2">
                <h2>Giảm 5% Khi Mua Cún Thứ 2</h2>
                <p>Siêu Pet Giảm 5% Khi Mua Từ 2 Bé Cún Trở Lên Hoặc Mua Lần 2</p>
                </div>
            </div>
            <div class="row">
                <div class="part1"><i class="fa fa-check-square-o"></i></div>
                <div class="part2">
                <h2>Thu Mua Lại cún Con</h2>
                <p>Siêu Pet Sẽ Bao Tiêu Cún Con Với Giá Cao Khi Cún Sinh Sản</p>
                </div>
            </div>
            <div class="row">
                <div class="part1"><i class="fa fa-credit-card"></i></div>
                <div class="part2">
                <h2>Thanh Toán Khi Nhận Cún</h2>
                <p>Khách Hàng Chỉ Cần Thanh Toán Trước 30% Giá Trị Đơn, 70% Còn Lại Thanh Toán Sau Khi Nhận Cún!</p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once 'data/view/ishot.php';
    include_once 'data/view/banchay.php';
    include_once "data/footer.php";
    ?>
</body>

</html>