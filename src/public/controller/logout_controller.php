<?php
setcookie('user', '', time()-3600);
// $_COOKIE['user'] = -1;   
// echo "<pre>";
// print_r($_COOKIE);
header('location:../view/home.php');