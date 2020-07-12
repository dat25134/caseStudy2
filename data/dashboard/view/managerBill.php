<?php
session_start();
include_once 'header.php';
include_once 'sidebar.php';
if (isset($_GET['ispay'])){
    if ($_GET['ispay'] == 3) {
        include_once '../control/getbill.php';
    }elseif ($_GET['ispay']==0){
        include_once '../control/getbillunchecked.php';
    }else {
        include_once '../control/getbillcheked.php';
    }
}else {
    include_once '../control/getbill.php';
}

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="table">
    <table>
        <caption> <b id="cap">Quản lý đơn hàng</b></caption>
        <tr>
            <th>IDBill</th>
            <th>IDUser</th>
            <th>Tên người nhận</th>
            <th>Tỉnh/T.Phố</th>
            <th>Quận/Huyện</th>
            <th>Địa chỉ</th>
            <th>Số ĐT</th>
            <th>Giá trị đơn hàng</th>
            <th>Ngày xuất</th>
            <th>Thanh toán?
                <form action="managerBill.php">
                    <select name="ispay" id="ispay">
                        <option value="3">ALL</option>
                        <option value="0">Chưa thanh toán</option>
                        <option value="1">Đã thanh toán</option>
                    </select>
                    <input type="submit" value="Apply">
                </form>
            </th>
        </tr>
        <?php foreach ($_SESSION['listBill'] as $val) : ?>
            <tr>
                <td style="width:50px"><?= $val['idbill'] ?></td>
                <td style="width:100px"><?= $val['iduser'] ?></td>
                <td style="width:100px"><?= $val['fullname'] ?></td>
                <td style="width:150px"><?= $val['tinh'] ?></td>
                <td style="width:50px"><?= $val['quan'] ?></td>
                <td style="width:50px"><?= $val['diachi'] ?></td>
                <td style="width:20px"><?= $val['sdt'] ?></td>
                <td style="width:20px"><?= number_format($val['total'])  ?></td>
                <td style="width:20px"><?= $val['date'] ?></td>
                <td><input type="checkbox" name="ispay" id="ispay" <?php if ($val['ispay'] == 1) echo "checked" ?>><a href="../control/ispay.php?idbill=<?= $val['idbill'] ?>">Checked</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>