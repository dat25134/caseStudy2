<?php
session_start();
include_once 'header.php';
include_once 'sidebar.php';
include_once '../control/getUser.php';
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="table">
    <table>
        <caption> <b id="cap">Quản lý người dùng</b> <b><?php include "search.php";?></b> <b>
                <div class="w3-container" id="add">
                    <button onclick="document.getElementById('idnew').style.display='block'" class="w3-button w3-green w3-large">ADD NEW</button>

                    <div id="idnew" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px"st>

                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('idnew').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                            </div>

                            <form class="w3-container" action="../control/addUser.php" method="POST">
                                <h2> Thêm người dùng mới </h2>
                                <div class="w3-section">
                                    <div class="row">
                                        <label><b>IDUser :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="email" name="email" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>PassWord :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="password" name="pass" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Quyền Admin :</b></label>
                                        <select name="isAdmin" id="isAdmin">
                                                <option value="true">True</option>
                                                <option value="false">False</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label><b>FirstName :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="firstName" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>LastName :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="lastName" value="" required>
                                    </div>
                                    <div class="row">
                                        <label><b>Ngày Đăng ký :</b></label>
                                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="dateReg" value="" placeholder="AUTO GET" readonly>
                                    </div>
                                    <div class="row">
                                        <label><b>Trạng thái :</b></label>
                                        <select name="status" id="status">
                                                <option value="open">Open</option>
                                                <option value="banned">Banned</option>
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
            <th>IDUser</th>
            <th>Mật khẩu</th>
            <th>Quyền Admin</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Ngày đăng ký</th>
            <th>Trạng thái</th>
            <th></th>
        </tr>
        <?php foreach ($_SESSION['listUser'] as $val) : ?>
            <tr>
                <td style="width:50px"><?= $val['iduser'] ?></td>
                <td style="width:100px"><?= $val['password'] ?></td>
                <td style="width:100px"><?= $val['isAdmin'] ?></td>
                <td style="width:150px"><?= $val['firstName'] ?></td>
                <td style="width:50px"><?= $val['lastName'] ?></td>
                <td style="width:50px"><?= $val['dateReg'] ?></td>
                <td style="width:20px"><?= $val['status'] ?></td>
                <td><?php include 'edituser.php'; ?> <a href="../control/banedUser.php?iduser=<?= $val['iduser'] ?>">Baned</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>