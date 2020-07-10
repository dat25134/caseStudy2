<?php
session_start();
include_once "../header.php";
?>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_typedog.css">
<div class="router">
    <a href="http://localhost/CODEGYM/caseStudy2/index.php">Trang chủ</a> > <a href="http://localhost/CODEGYM/caseStudy2/data/view/typedog.php">Giống chó</a>
</div>

<div class="typedog">
    <div class="caption">
        <div class="head">DANH SÁCH GIỐNG CHÓ</div>
    </div>
    <div class="noidung">
        <?php
        foreach ($_SESSION['typeDog'] as $key => $value) :
        ?>
            <?php if ($key % 3 == 0) {
                echo "<div class='page'>";
            } ?>
            <div class="product">
                <img src="<?php echo $value['imageURL'] ?>">
                <h3><?php echo $value['ten'] ?></h3>
                <div class="row">
                    <span><i class="fa fa-check"></i> Nguồn gốc: </span><span><label for="ngouongoc"> <?php echo $value['nguongoc'] ?></label></span>
                </div>

                <div class="row">
                    <span><i class="fa fa-check"></i> Cân nặng: </span><span><label for="cannang"> <?php echo $value['cannang'] ?> </label></span>
                </div>

                <div class="row">
                    <span><i class="fa fa-check"></i> Tuổi thọ: </span><span><label for="tuoitho"> <?php echo $value['tuoitho'] ?> </label></span>
                </div>

                <div class="row">
                    <span><i class="fa fa-check"></i> Giá: </span><span><label for="price"> <?php echo number_format($value['price']) . " VNĐ" ?> </label></span>
                </div>

                <div class="row">
                    <span><i class="fa fa-check"></i> Tình trạng: </span><span><label for="ishave" style="color: red; font-weight: bold;"> <?php if ($value['isHave'] == 1) {
                                                                                                                                                echo "CÒN HÀNG";
                                                                                                                                            } else {
                                                                                                                                                echo "HẾT HÀNG";
                                                                                                                                            } ?> </label></span>
                </div>

                <div class="row">
                    <span><a href="http://localhost/CODEGYM/caseStudy2/data/control/addtocart.php?iddog=<?php echo $value['idDog'] ?>" id="buy"> Thêm giỏ hàng</a></span><span><a href="http://localhost/CODEGYM/caseStudy2/data/control/detaildog.php?id=<?php echo $value['idDog'] ?>" id="detail">Chi tiết</a></span>
                </div>

                <div class="row">
                    <label for="sale" id="sale"> <?php if ($value['sale'] != 0) echo "<img src='http://localhost/CODEGYM/caseStudy2/images/saleoff.png'>" . "<label id='percent'>Sale " . $value['sale'] . "%</label>"; ?> </label>
                </div>
            </div>
            <?php if ($key == (count($_SESSION['typeDog']) - 1)) {
                echo "</div>";
            } elseif ($key % 3 == 2) {
                echo "</div>";
            }
            ?>
        <?php endforeach ?>
    </div>
</div>
<?php
include_once "../footer.php";
?>