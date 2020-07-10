<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<?php
if (isset($_GET['log'])){
    if ($_GET['log'] == 0){
        echo "<script> alert('Đăng nhập để mua hàng')</script>";
    }
}

?>
<body>
    <div class="container">
        <div class="content">
            <div class="content_left">
                <div id="gg">
                    <img src="http://localhost/CODEGYM/caseStudy2/images/gg.png"><a href="#"> Log in with Google</a><br>
                </div>
                <div id="or" style="color: gray;">or</div>
                <form action="../control/signin.php" method="POST">
                    <div class="part acc">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Your email" class="input">
                    </div>
                    <div class="part acc">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="input">
                    </div>
                    <div class="part">
                        <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label>
                        <a href="" id="forgot">Forgot password?</a>
                    </div>
                    <div class="part">
                        <input type="submit" value="Login" name="submit" class="button">
                    </div>
                    <div class="foot">
                        <label for="register">Don't have an account?</label><a href="../view/register.php">Sign up</a>
                    </div>
                </form>
            </div>
            <div class="content_right">
                <div class="par part1">
                    <div class="icon_group"><i class="fa fa-gears icon"></i></div>
                    <div>
                        <h3>Development</h3>
                        <p>A modern and clean design system for developing fast and powerful web interfaces</p>
                    </div>
                </div>
                <div class="par part2">
                    <div class="icon_group"><i class="fa fa-gift icon"></i></div>
                    <div>
                        <h3>Features</h3>
                        <p>A modern and clean design system for developing fast and powerful web interfaces</p>
                    </div>
                </div>
                <div class="par part3">
                    <div class="icon_group"><i class="fa fa-chain-broken icon"></i></div>
                    <div>
                        <h3>Updates</h3>
                        <p>A modern and clean design system for developing fast and powerful web interfaces</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>