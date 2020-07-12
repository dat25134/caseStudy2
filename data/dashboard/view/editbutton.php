<div class="w3-container">
    <button onclick="document.getElementById('id<?= $val['idDog'] ?>').style.display='block'" class="w3-button w3-green w3-large">Edit</button>

    <div id="id<?= $val['idDog'] ?>" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id<?= $val['idDog'] ?>').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" action="../control/editdog.php?idDog=<?= $val['idDog'] ?>" method="GET">
                <h2> Chỉnh sửa thông tin hàng hóa </h2>
                <div class="w3-section">
                    <div class="row">
                        <label><b>ID :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="idDog" value="<?= $val['idDog'] ?>" readonly>
                    </div>
                    <div class="row">
                        <label><b>Tên :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="ten" value="<?= $val['ten'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Nguồn gốc :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="nguongoc" value="<?= $val['nguongoc'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Đặc điểm :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="dacdiem" value="<?= $val['dacdiem'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Cân nặng :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="cannang" value="<?= $val['cannang'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Tuổi thọ :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="tuoitho" value="<?= $val['tuoitho'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>IsHot :</b></label>
                        <select name="isHot" id="isHot">
                            <?php if ($val['isHot'] == 1) : ?>
                                <option value="0">No Hot</option>
                                <option value="1" selected>Hot</option>
                            <?php else : ?>
                                <option value="0">No Hot</option>
                                <option value="1">Hot</option>
                            <?php endif ?>
                        </select>
                    </div>
                    <div class="row">
                        <label><b>Bán chạy :</b></label>
                        <select name="banChay" id="banChay">
                            <?php if ($val['banChay'] == 1) : ?>
                                <option value="0">Bình Thường</option>
                                <option value="1" selected>Bán Chạy</option>
                            <?php else : ?>
                                <option value="0">Bình Thường</option>
                                <option value="1">Bán Chạy</option>
                            <?php endif ?>
                        </select>
                    </div>
                    <div class="row">
                        <label><b>Còn hàng :</b></label>
                        <select name="isHave" id="isHave">
                            <?php if ($val['isHave'] == 1) : ?>
                                <option value="0">Hết Hàng</option>
                                <option value="1" selected>Còn Hàng</option>
                            <?php else : ?>
                                <option value="1">Còn Hàng</option>
                                <option value="0">Hết Hàng</option>
                            <?php endif ?>
                        </select>
                    </div>
                    <div class="row">
                        <label><b>Giá :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="price" value="<?= $val['price'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Sale :</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" name="sale" value="<?= $val['sale'] ?>" required>
                    </div>
                    <div class="row">
                        <label><b>Đã Xóa :</b></label>
                        <select name="isdel" id="isdel">
                            <?php if ($val['isdel'] == 1) : ?>
                                <option value="0">Chưa Xóa</option>
                                <option value="1" selected>Đã xóa</option>
                            <?php else : ?>
                                <option value="1">Chưa Xóa</option>
                                <option value="0">Đã xóa</option>
                            <?php endif ?>
                        </select>
                    </div>
                    <div class="row">
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Áp dụng</button>
                        <button onclick="document.getElementById('id<?= $val['idDog'] ?>').style.display='none'" type="button" class="w3-button w3-block w3-red w3-section w3-padding">Cancel</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>