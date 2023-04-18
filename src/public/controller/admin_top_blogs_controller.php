<?php
session_start();
$_SESSION['topBlogs'] = [];
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
$blogs = AllBlog::find_by_sql("SELECT * FROM `all_blogs` order by `likes` limit 5");
foreach ($blogs as $key => $blogObject) {
    $id = $blogObject->id;
    $title = $blogObject->title;
    $description = $blogObject->description;
    $image = $blogObject->image;
    $arr = array($id, $title, $description, $image);
    array_push($_SESSION['topBlogs'], $arr);
    // array_push($_SESSION['topBlogs'], $blogObject);
}
header('location:../view/admin_top_blogs.php');
