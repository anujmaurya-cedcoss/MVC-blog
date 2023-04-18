<?php 
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
if (!isset($_COOKIE['user'])) {
    header('location:../view/home.php?msg=loginErr');
}
$title = $_POST['title'];
$image = $_POST['image_link'];
$description = $_POST['description'];
echo "<pre>";
print_r($_COOKIE);
echo $_COOKIE['user'];
$stmt = array('title' => $title, 'image' => $image, 'description' => $description, 'user_id' => $_COOKIE['user']);
AllBlog::create($stmt);
header('location:../view/home.php');
