<?php
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
if ($name != "" && $email != "" && $pass != "" && $pass == $repass) {
    User::create(array('name' => $name, 'email' => $email, 'password' => $pass));
    header('location:../view/login.php');
} else {
    header('location:../view/signup.php?msg=Error');
}

?>