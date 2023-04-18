<?php
session_start();
$arr = json_decode($_SESSION['editBlog']);
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});

echo "<pre>";
print_r($_POST);

$blog = AllBlog::find_by_id($arr[0]);
$blog->title = $_POST['title'];
$blog->description = $_POST['description'];
$blog->image = $_POST['image_link'];
$blog->save();
header('location:../view/home.php');
