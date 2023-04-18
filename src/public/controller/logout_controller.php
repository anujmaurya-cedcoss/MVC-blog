<?php
session_start();
unset($_SESSION['user']);
// echo "<pre>";
// print_r($_SESSION);
header('location:../view/home.php');