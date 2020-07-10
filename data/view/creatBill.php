<?php
session_start();
$cartitem = $_SESSION['cartItem'];
include_once "../header.php";
?>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_creatbill.css">
<div class="router">
    <a href="http://localhost/CODEGYM/caseStudy2/index.php">Trang chủ</a> > <label> Chi tiết giỏ hàng </label> > <label> Địa chỉ </label>
</div>

<div class="step_container">
    <div class="step1">Giỏ hàng</div>
    <div class="solid1"> </div>
    <div class="step1">Địa chỉ</div>
    <div class="solid"> </div>
    <div class="step">Xác nhận</div>
</div>

<div class="creatbill">
    <form action="http://localhost/CODEGYM/caseStudy2/data/view/comfirmbill.php" class="diachi" method="POST">
        <div class="left">
            <table>
                <caption>Địa chỉ giao hàng của quý khách</caption>
                <tr>
                    <td>Email <label for="">(*):</label></td>
                    <td style="text-align: left;"> <?php echo $_SESSION['user']['iduser']?></td>
                </tr>
                <tr>
                    <td>Họ tên <label for="fullname">(*):</label></td>
                    <td><input type="text" name="fullname" placeholder=" Nguyễn Văn A"></td>
                </tr>
                <tr>
                    <td>Tỉnh/ Thành phố <label for="tinh">(*):</label></td>
                    <td><input type="text" name="tinh" placeholder="Huế"></td>
                </tr>
                <tr>
                    <td>Quận/ Huyện <label for="huyen">(*):</label></td>
                    <td><input type="text" name="huyen" placeholder="Hương Thủy"></td>
                </tr>
                <tr>
                    <td>Địa chỉ (Số nhà, phường) <label for="diachi">(*):</label></td>
                    <td><textarea name="diachi" id="diachi" cols="60" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Số điện thoại <label for="">(*):</label></td>
                    <td><input type="text" name="sdt" id="sdt"></td>
                </tr>
            </table>
        </div>
        <div class="right">
            <div class="caption">Đơn hàng <label for="sanpham"> (<?php echo count($cartitem)?> sản phẩm)</label></div>
            <div class="sanpham">
                <?php foreach ($cartitem as $value):?>
                <div class="row">
                    <div class='ele img'><img src="<?php echo $value['imageURL']?>" alt=""></div>
                    <div class='ele'><div class="ten"><?php echo $value['ten']?></div></div>
                    <div class='ele'><div class="sl"><?php echo $value['SL']?></div></div>
                    <div class='ele'><div class="price"><?php echo number_format($value['price']) ?></div></div>
                </div>
                <?php endforeach ?>
                <div class="row_total">
                    <label for="total"> Tổng cộng: </label>
                    <span><?php echo number_format($_SESSION['total'])." VNĐ"?></span>
                </div>
                <input type="submit" name="submit" value="TIẾP TỤC" id="submit">
            </div>
        </div>
    </form>
</div>

<?php
include_once "../footer.php";
?>