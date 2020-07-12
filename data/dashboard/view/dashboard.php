<?php include_once "control/countUserandbill.php";?>
<div class="dashboard">
    <div class="info">
        <div class="group group1">
            <div class="row1 row">
                <i class="fa fa-paw fa-5x"></i>
                <div class="nd">
                    <label for="SL"> <?php echo count($_SESSION['typeDog'])?></label>
                    <p>Số lượng giống chó</p>
                </div>
            </div>
            <div class="row2 row">
                <a href="http://localhost/CODEGYM/caseStudy2/data/dashboard/view/managerdog.php"><i class="fa fa-caret-right"></i> Xem chi tiết</a>
            </div>
        </div>
        <div class="group group2">
            <div class="row1 row">
            <i class="fa fa-user-circle-o fa-5x"></i>
                <div class="nd">
                    <label for="SL"> <?php echo count($listUser)?> </label>
                    <p>Số lượng user</p>
                </div>
            </div>
            <div class="row2 row">
                <a href="http://localhost/CODEGYM/caseStudy2/data/dashboard/view/managerUser.php"><i class="fa fa-caret-right"></i> Xem chi tiết</a>
            </div>
        </div>
        <div class="group group3">
            <div class="row1 row">
            <i class="fa fa-shopping-cart fa-5x"></i>
                <div class="nd">
                    <label for="SL"> <?php echo count($listBill)?> </label>
                    <p>Số lượng đơn hàng</p>
                </div>
            </div>
            <div class="row2 row">
                <a href="http://localhost/CODEGYM/caseStudy2/data/dashboard/view/managerBill.php"><i class="fa fa-caret-right"></i> Xem chi tiết</a>
            </div>
        </div>
        <div class="group group4">
            <div class="row1 row">
            <i class="fa fa-dollar fa-5x"></i>
                <div class="nd">
                    <label for="thunhap" style="font-size: 40px"> <?php
                        $total = 0;
                        foreach ($listBill as $value){
                            if ($value['ispay']==1){
                                $total += $value['total'];
                            }
                        }
                        echo $total/1000000  ." tr";
                    ?> </label>
                    <p>Thu Nhập</p>
                </div>
            </div>
            <div class="row2 row">
                <a href="http://localhost/CODEGYM/caseStudy2/data/dashboard/view/managerBill.php"><i class="fa fa-caret-right"></i> Xem chi tiết</a>
            </div>
        </div>
    </div>
</div>