<?php
session_start();
$cartitem = $_SESSION['cartItem'];
include_once "../header.php";
?>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_cartdetail.css">
<div class="router">
    <a href="http://localhost/CODEGYM/caseStudy2/index.php">Trang chủ</a> > <label> Chi tiết giỏ hàng </label>
</div>

<div class="step_container">
    <div class="step1">Giỏ hàng</div><div class="solid"> </div>
    <div class="step">Địa chỉ</div><div class="solid"> </div>
    <div class="step">Xác nhận</div>
</div>
<div class="cart-detail">
    <div class="left">
        <h2>Chi tiết giỏ hàng</h2>
        <table>
            <tr>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Sale</th>
                <th>Xóa</th>
            </tr>
            <?php $sum = 0; $total = 0;?>
            <?php if (count($cartitem) == 0) echo "<tr><td colspan = 7>Không có sản phẩm nào, mời mua hàng...</td><tr>";?>
            <?php foreach ($cartitem as $value) : ?>
                <tr>
                    <td><img src="<?php echo $value['imageURL'] ?>" style="width:80px; height: 80px"></td>
                    <td><?php echo $value['ten'] ?></td>
                    <td><?php echo number_format($value['price']) . " VNĐ" ?></td>
                    <td><?php echo $value['SL'];?></td>
                    <td><?php echo number_format($value['SL']*$value['price']). " VNĐ"; $sum += ($value['SL']*$value['price']); $total += ($value['SL']*$value['price'])*(100-$value['sale'])/100; ?></td>
                    <td><?php echo $value['sale']. " %";?></td>
                    <td><a href="http://localhost/CODEGYM/caseStudy2/data/control/deleteCartitem.php?idDog=<?php echo $value['idDog']?>"><i class="fa fa-trash"></i></a></td>  
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <div class="right">
        <div class="row">-- Thông tin đơn hàng--</div>
        <div class="row"> <label>Tạm tính:</label> <span> <?php echo number_format($sum)." VNĐ" ;?></span></div>
        <div class="row"> <label>Tổng tiền thanh toán:</label><span> <?php echo number_format($total). " VNĐ" ;?></span> </div>
        <a href="http://localhost/CODEGYM/caseStudy2/data/view/creatbill.php" id="creatBill">Tiến hành đặt hàng</a>
        <a href="http://localhost/CODEGYM/caseStudy2/data/view/typedog.php" id="con-buy">
            < Tiếp tục mua hàng</a> </div> </div> <?php
                                                    include_once "../footer.php";
                                                    $_SESSION['total'] = $total;
                                                    ?>