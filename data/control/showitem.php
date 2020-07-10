<?php
$query = 'SELECT * from product';
$result = $connect->query($query);
$row = [];
$row = $result->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
foreach ($row as $key => $value) {
    if ($i%3==0){ echo "<div id=p$i class='show_item'>";}
        echo "<div class='product'>";
        echo "<div class=\"anh\"><img src=\"".$value['img']."\" onmouseover=\"changeImg('".$value['img2']."','".$value['ID']."')\"onmouseout=\"changeImg('".$value['img']."','".$value['ID']."')\" id = \"".$value['ID']."\"></div>";
        echo "<h3>" . $value['ID'] . " </h3>";
        echo "<span><i class='fa fa-cny'></i>" . $value['price'] . "</span> <b>RRP</b>";
        echo "<h2>" . $value['name'] . "</h2>";
        echo "<div class = 'button'><button><i class='fa fa-eye'></i> QUICK VIEW </button></div>";
        echo "</div>";
    if ($i%3==2){ echo "</div>";}   
    $i++;
}
?>