<!-- Custom Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- boostrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/data/dashboard/css/style.css">

<div class="header">
    <div class="left">
        <div class="logo"> YeuPet.com </div>
        <div class="website"> <a href="http://localhost/CODEGYM/caseStudy2/index.php">Website</a></div>
    </div>
    <div class="right">
        <?php if (isset($_SESSION['user'])):?>
            <?php if ($_SESSION['user']['isAdmin'] == 'true') : ?>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user-o"></i> <?php echo $_SESSION['user']['firstName'].$_SESSION['user']['lastName']?>
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Cài đặt</a></li>
                        <li><a href="#">Thông tin tài khoản</a></li>
                        <li class="divider"></li>
                        <li><a href="http://localhost/CODEGYM/caseStudy2/data/control/logout.php">Logout</a></li>
                    </ul>
                </div>
            <?php else : ?>
                <?php header("Location: http://localhost/CODEGYM/caseStudy2/index.php");?>
            <?php endif ?>
        <?php else :?>
            <?php header("Location: http://localhost/CODEGYM/caseStudy2/index.php");?>  
        <?php endif ?>
    </div>
</div>