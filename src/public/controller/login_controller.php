<?php
session_start();
if(!isset($_SESSION['user'])) {
    $_SESSION['user'] = -1;
}
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
if (isset($_POST)) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $row = User::find_by_sql("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'");
    if ($row[0]->email == $email && $row[0]->password == $pass) {
        $_SESSION['user'] = $row[0]->id;
        header('location: ../view/home.php');
    } else {
        header('location:../view/login.php?msg=Error');
    }
}