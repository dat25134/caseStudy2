<?php
session_start();
unset($_SESSION['user']);
header("Location: http://localhost/CODEGYM/caseStudy2/index.php");
?>