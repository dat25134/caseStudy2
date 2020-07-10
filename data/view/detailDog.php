<?php
session_start();
include_once "../header.php";
$image_array = $_SESSION['images'];
?>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_detaildog.css">
<div class="detail-dog">
    <div class="router">
        <a href="http://localhost/CODEGYM/caseStudy2/index.php">Trang chủ</a> > <a href="http://localhost/CODEGYM/caseStudy2/data/view/typedog.php">Giống chó</a> > <label> <?php echo $image_array[0]['ten']; ?></label>
    </div>
    <h2>
        <div>
            <img src="http://localhost/CODEGYM/caseStudy2/images/dog.svg" style="width:30px;height:auto;">
            <?php echo $image_array[0]['ten']; ?>
            <label for="vote">Vote : ***** </label>
        </div>
    </h2>
    <div class="images-detail">
        <div class="container_left">
            <div class="container-content">
                <?php foreach ($image_array as $value) : ?>
                    <div class="mySlides">
                        <img src="<?php echo $value['imageURL'] ?>" style="width:100%">
                    </div>
                <?php endforeach ?>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <?php foreach ($image_array as $key => $value) : ?>
                        <div class="column">
                            <img class="demo cursor" src="<?php echo $value['imageURL']; ?>" style="width:100%" onclick="currentSlide(<?php echo $key + 1; ?>)">
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="container_right">
            <div class="detail">
                <h4> <?php echo $image_array[0]['ten']; ?> </h4>
                <?php
                $index = $image_array[0]['idDog'] - 1;
                $dog = $_SESSION['typeDog'][$index];
                ?>
                <div class="row">
                    <label for="nguongoc"><i class="fa fa-check" style="color:green"></i>Nguồn gốc:</label>
                    <label for="data" style="text-align: right;"><?php echo $dog['nguongoc'] ?> </label>
                </div>
                <div class="row">
                    <label for="dacdiem"><i class="fa fa-check" style="color:green"></i>Đặc điểm ngoại hình:</label>
                    <label for="data" style="text-align: right;"><?php echo $dog['dacdiem'] ?> </label>
                </div>
                <div class="row">
                    <label for="cannang"><i class="fa fa-check" style="color:green"></i>Cân nặng:</label>
                    <label for="data" style="text-align: right;"><?php echo $dog['cannang'] ?> </label>
                </div>
                <div class="row">
                    <label for="tuoitho"><i class="fa fa-check" style="color:green"></i>Tuổi thọ:</label>
                    <label for="data" style="text-align: right;"><?php echo $dog['tuoitho'] ?> </label>
                </div>
                <div class="row">
                    <label for="status"><i class="fa fa-check" style="color:green"></i>Tình trạng:</label>
                    <label for="data" style="color: red; font-weight: bold;text-align: right;"><?php if ($dog['isHave'] == 1) echo "CÒN CÚN";
                                                                                                else echo "HẾT CÚN"; ?> </label>
                </div>
                <div class="row">
                    <label for="gia"><i class="fa fa-check" style="color:green"></i>Giá cả:</label>
                    <label for="data" style="text-align: right;"><?php echo number_format($dog['price']) . " VNĐ"  ?> </label>
                </div>
            </div>
            <div class="order">
                <table>
                    <tr>
                        <th colspan="3" id="row1"> LIÊN HỆ ĐẶT HÀNG </th>
                    </tr>
                    <tr>
                        <th> Màu sắc </th>
                        <th> Cún Đực </th>
                        <th> Cún Cái </th>
                    </tr>
                    <tr>
                        <td></td>
                        <td> Liên hệ <i class="fa fa-phone"></i> </td>
                        <td> Liên hệ <i class="fa fa-phone"></i> </td>
                    </tr>
                </table>
                <p>(Bảng giá tham khảo, giá cụ thể từng bé sẽ phụ thuộc vào: Xuất xứ chó bố mẹ, giấy tờ đi kèm, mức độ xuất sắc... )</p>
                <a href="http://localhost/CODEGYM/caseStudy2/data/control/addtocart.php?iddog=<?php echo $dog['idDog']?>">THÊM VÀO GIỎ HÀNG</a>
            </div>
        </div>
    </div>

</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }

    setInterval(function(){ plusSlides(1); }, 3000);

</script>

<?php
include_once "../footer.php";
?>