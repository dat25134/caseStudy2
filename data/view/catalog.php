
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_catalog.css">
<div class="catalog">
    <div class="cata-item">
        <img src="./images/takecareof.jpg" alt="">
        <h3>Cách chăm sóc</h3>
    </div>
    <div class="cata-item">
        <img src="./images/suckhoe.png" alt="">
        <h3>Sức khỏe</h3>
    </div>
    <div class="cata-item">
        <img src="./images/huanluyen.svg" alt="">
        <h3>Huấn luyện</h3>
    </div>
    <div class="cata-item">
        <div class="dropdown-type" style="float:right;">
            <span>
                <a href="http://localhost/CODEGYM/caseStudy2/data/view/typedog.php" style="display:flex">
                    <img src="./images/typedog.jpg">
                    <h3>Giống chó</h3>
                </a>
            </span>
            <div class="dropdown-content-type">
               <?php foreach ($_SESSION['typeDog'] as $key => $value ) :?>
                <?php if ($key % 5 == 0) echo "<div class = 'col'>"?> 
                <a href="http://localhost/CODEGYM/caseStudy2/data/control/detaildog.php?id=<?php echo $value['idDog'] ?>"><?php echo $value['ten'] ?></a>
                <?php if ($key % 5 == 4) echo "</div>"?> 
                <?php endforeach?>
            </div>
        </div>
    </div>

</div>