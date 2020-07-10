<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>

<body>
<?php 
session_start(); 
if ($_SESSION['login1st']){
    echo "<script>alert ('Xin chào". $_SESSION['user']['firstName'].$_SESSION['user']['lastName']."')</script>";
};
?>
    <?php include_once "view/header.php"; ?>
    <?php include_once "view/sidebar.php"; ?>
    <?php include_once "view/dashboard.php"; ?>
</body>

</html>