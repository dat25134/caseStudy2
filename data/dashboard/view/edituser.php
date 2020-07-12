<?php
$id = explode ( "@" , $val['iduser'])
?>
<div class="userList">
<div class="w3-container">
    <button onclick="document.getElementById('id<?= $id[0] ?>').style.display='block'" class="w3-button w3-green w3-large">Edit</button>

    <div id="id<?= $id[0]  ?>" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id<?= $id[0]  ?>').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" action="../control/edituser.php?" method="GET">
                <h2> Chỉnh sửa thông tin người dùng </h2>
                <div class="w3-section">
                    <div class="row">
                        <label><b>IDUser :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="iduser" value="<?= $val['iduser']  ?>" readonly>
                    </div>
                    <div class="row">
                        <label><b>Pass :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="password" value="<?= $val['password'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Quyền Admin :</b></label>
                        <select name="isAdmin" id="isAdmin">
                            <?php if ($val['isAdmin'] == "true") : ?>
                                <option value="true" selected>True</option>
                                <option value="false">False</option>
                            <?php else : ?>
                                <option value="true" >True</option>
                                <option value="false">False</option>
                            <?php endif ?>
                        </select>
                    </div>
                    <div class="row">
                        <label><b>First Name :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="firstName" value="<?= $val['firstName'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Last Name :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="lastName" value="<?= $val['lastName'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Ngày Đăng ký :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="dateReg" value="<?= $val['dateReg'] ?>" readonly>
                    </div>
                    <div class="row">
                        <label><b>Trạng thái :</b></label>
                        <select name="status" id="status">
                            <?php if ($val['status'] == "open") : ?>
                                <option value="open" selected>Open</option>
                                <option value="banned">Banned</option>
                            <?php else : ?>
                                <option value="open">Open</option>
                                <option value="banned">Banned</option>
                            <?php endif ?>
                        </select>
                    </div>
                    <div class="row">
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Áp dụng</button>
                        <button onclick="document.getElementById('id<?= $id[0] ?>').style.display='none'" type="button" class="w3-button w3-block w3-red w3-section w3-padding">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
