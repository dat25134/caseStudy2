<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_ishot.css">
<div class="ishot">
  <div class="caption">
    <h2>GIỐNG CHÓ ĐANG HOT TRÊN THỊ TRƯỜNG HIỆN NÀY</h2>
    <i class="fa fa-paw" id="iconCap"></i>
  </div>
  <div class="noidung">
    <i class="fa fa-angle-left" id="arrow_left" onclick="changeProducthot('l')"></i>
    <?php
    include_once "data/control/ishot.php";
    foreach ($ishot as $key => $value) :
    ?>
      <?php if ($key % 3 == 0) {
        if ($key == 0) echo "<div class='pageHOT' style ='display :flex;'>";
        else echo "<div class='pageHOT'>";
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
          <span><i class="fa fa-check"></i> Giá: </span><span><label for="price"> <?php echo number_format($value['price']) ." VNĐ" ?> </label></span>
        </div>

        <div class="row">
          <span><i class="fa fa-check"></i> Tình trạng: </span><span><label for="ishave" style="color: red; font-weight: bold;"> <?php if ($value['isHave'] == 1) {
                                                                                                                                    echo "CÒN HÀNG";
                                                                                                                                  } else {
                                                                                                                                    echo "HẾT HÀNG";
                                                                                                                                  } ?> </label></span>
        </div>

        <div class="row">
          <span><a href="http://localhost/CODEGYM/caseStudy2/data/control/addtocart.php?iddog=<?php echo $value['idDog'] ?>" id="buy">Thêm giỏ hàng</a></span><span><a href="http://localhost/CODEGYM/caseStudy2/data/control/detaildog.php?id=<?php echo $value['idDog'] ?>" id="detail">Chi tiết</a></span>
        </div>

        <div class="row">
          <label for="sale" id="sale"> <?php if ($value['sale']!= 0 ) echo "<img src='http://localhost/CODEGYM/caseStudy2/images/saleoff.png'>"."<label id='percent'>Sale ".$value['sale']."%</label>"; ?> </label>
        </div>
      </div>
      <?php if ($key == (count($ishot) - 1)) {
        echo "</div>";
      } elseif ($key % 3 == 2) {
        echo "</div>";
      }
      ?>
    <?php endforeach ?>
    <i class="fa fa-angle-right" id="arrow_right" onclick="changeProducthot('r')"></i>
  </div>
</div>
<script>
  let indexHOT = 1;

  function changeProducthot(element) {
    let arr = document.getElementsByClassName('pageHOT');
    if (element == 'r') {
      if (indexHOT == arr.length) {
        arr[indexHOT - 1].style.display = 'none';
        arr[0].style.display = 'flex';
        indexHOT = 1;
      } else {
        arr[indexHOT - 1].style.display = 'none';
        arr[indexHOT].style.display = 'flex';
        indexHOT++;
      }
    }
    if (element == 'l') {
      if (indexHOT == 1) {
        arr[indexHOT - 1].style.display = 'none';
        arr[arr.length - 1].style.display = 'flex';
        indexHOT = arr.length;
      } else {
        arr[indexHOT - 1].style.display = 'none';
        arr[indexHOT - 2].style.display = 'flex';
        indexHOT--;
      }
    }
  }
</script>