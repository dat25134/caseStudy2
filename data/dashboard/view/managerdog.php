<?php
session_start();
include_once 'header.php';
include_once 'sidebar.php';
include_once '../control/getdog.php';
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="table">
    <table>
        <caption> <b id="cap">Quản lý giống chó</b> <b>
                <div class="w3-container" id="add">
                    <button onclick="document.getElementById('idnew').style.display='block'" class="w3-button w3-green w3-large">ADD NEW</button>

                    <div id="idnew" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px"st>

                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('idnew').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                            </div>

                            <form class="w3-container" action="../control/addDog.php?" method="GET">
                                <h2> Thêm giống chó mới </h2>
                                <div class="w3-section">
                                    <div class="row">
                                        <label><b>ID :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="idDog" value="" readonly>
                                    </div>
                                    <div class="row">
                                        <label><b>Tên :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="ten" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Nguồn gốc :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="nguongoc" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Đặc điểm :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="dacdiem" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Cân nặng :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="cannang" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Tuổi thọ :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="tuoitho" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>IsHot :</b></label>
                                        <select name="isHot" id="isHot">
                                                <option value="0">No Hot</option>
                                                <option value="1">Hot</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label><b>Bán chạy :</b></label>
                                        <select name="banChay" id="banChay">
                                                <option value="0">Bình Thường</option>
                                                <option value="1">Bán Chạy</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label><b>Còn hàng :</b></label>
                                        <select name="isHave" id="isHave">
                                                <option value="1">Còn Hàng</option>
                                                <option value="0">Hết Hàng</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label><b>Giá :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="price" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Sale :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="sale" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Đã Xóa :</b></label>
                                        <select name="isdel" id="isdel">
                                                <option value="1">Chưa Xóa</option>
                                                <option value="0">Đã xóa</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">ADD</button>
                                        <button onclick="document.getElementById('idnew').style.display='none'" type="button" class="w3-button w3-block w3-red w3-section w3-padding">Cancel</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </b> </caption>
        <tr>
            <th>ID</th>
            <th>Ảnh đại diện</th>
            <th>Tên</th>
            <th>Nguồn gốc</th>
            <th>Đặc điểm</th>
            <th>Cân nặng</th>
            <th>Tuổi thọ</th>
            <th>IsHot</th>
            <th>Bán Chạy</th>
            <th>Còn hàng</th>
            <th>Giá</th>
            <th>Sale</th>
            <th>Đã xóa</th>
            <th></th>
        </tr>
        <?php foreach ($_SESSION['listDog'] as $val) : ?>
            <tr>
                <td style="width:50px"><?= $val['idDog'] ?></td>
                <td style="padding: 10px 0px;"><img src="<?= $val['imageURL'] ?>" style="width:80px;height:80px"></td>
                <td style="width:100px"><?= $val['ten'] ?></td>
                <td style="width:100px"><?= $val['nguongoc'] ?></td>
                <td style="width:150px"><?= $val['dacdiem'] ?></td>
                <td style="width:50px"><?= $val['cannang'] ?></td>
                <td style="width:50px"><?= $val['tuoitho'] ?></td>
                <td style="width:20px"><?php
                                        if ($val['isHot'] == 1) echo "HOT";
                                        ?></td>
                <td style="width:20px"><?php if ($val['banChay'] == 1) echo "Bán chạy"; ?></td>
                <td style="width:20px"><?php if ($val['isHave'] == 1) echo "Còn";
                                        else echo "Hết" ?></td>
                <td style="width:150px"><?= number_format($val['price']) ?></td>
                <td style="width:20px"><?= $val['sale'] ?></td>
                <td style="width:20px"><?php if ($val['isdel'] == 1) echo "Đã Xóa" ?></td>
                <td><?php include 'editbutton.php'; ?> <a href="../control/delDog.php?idDog=<?= $val['idDog'] ?>">Xóa</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>