<?php
session_start();
$cartitem = $_SESSION['cartItem'];
$_SESSION['bill'] = $_REQUEST;
include_once "../header.php";
?>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_creatbill.css">
<div class="router">
    <a href="http://localhost/CODEGYM/caseStudy2/index.php">Trang chủ</a> > <label> Chi tiết giỏ hàng </label> > <label> Địa chỉ </label> > <label> Xác nhận </label>
</div>

<div class="step_container">
    <div class="step1">Giỏ hàng</div>
    <div class="solid1"> </div>
    <div class="step1">Địa chỉ</div>
    <div class="solid1"> </div>
    <div class="step1">Xác nhận</div>
</div>

<div class="comfirm">
    <form action="http://localhost/CODEGYM/caseStudy2/data/control/creatbill.php">
        <div class="content">
            <div class="top">
                <span> Thông tin đơn hàng</span>
                <span style="text-align:right"> <input type="submit" name="submit" value="Hoàn tất đặt hàng"></span>
            </div>
            <div class="detail">
                <table>
                    <caption>Thông tin đặt hàng</caption>
                    <tr>
                        <th>Ten</th>
                        <th>Giá </th>
                        <th>Số lượng</th>
                        <th>Sale</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php foreach ($cartitem as $value):?>
                    <tr>
                        <td><?php echo $value['ten']?></td>
                        <td><?php echo number_format($value['price']) ?></td>
                        <td><?php echo $value['SL']?></td>
                        <td><?php echo $value['sale']?></td>
                        <td><?php echo number_format($value['SL']*$value['price']*(100-$value['sale'])/100) ?></td>
                    </tr>
                        <?php endforeach ?>
                    <tr>
                        <td colspan="4">Tổng tiền</td>
                        <td><?php echo number_format($_SESSION['total'])." VNĐ"?></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>

<?php
include_once "../footer.php";
?>