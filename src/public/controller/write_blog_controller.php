<?php
session_start();
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
if (!isset($_SESSION['user'])) {
    header('location:../view/home.php?msg=loginErr');
}
$title = $_POST['title'];
$image = $_POST['image_link'];
$description = $_POST['description'];
$stmt = array('title' => $title, 'image' => $image, 'description' => $description, 'user_id' => $_SESSION['user']);
AllBlog::create($stmt);
header('location:../view/home.php');
