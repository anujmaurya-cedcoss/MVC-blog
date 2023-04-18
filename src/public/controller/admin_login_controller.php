<?php
session_start();
if(!isset($_SESSION['admin'])) {
    $_SESSION['admin'] = -1;
}
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
if (isset($_POST)) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $row = Admin::find_by_sql("SELECT * FROM `admins` WHERE `mail` = '$email' AND `password` = '$pass'");
    if ($row[0]->mail == $email && $row[0]->password == $pass) {
        $_SESSION['admin'] = $row[0]->id;
        header('location: ../view/admin_main.php');
    } else {
        header('location:../view/admin_login.php?msg=Error');
    }
}