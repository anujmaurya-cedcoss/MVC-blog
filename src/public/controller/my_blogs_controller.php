<?php
session_start();
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
$r = $_GET['id'];
$r = explode('/', $r);
$action = $r[1];
switch ($action) {
    case 'delete':
        $blog = AllBlog::find_by_id($r[0]);
        $blog->delete();
        header('location:../view/my_blogs.php');
        break;
    case 'edit':
        $row = AllBlog::find_by_id($r[0]);
        $blog_id = $row->id;
        $title = $row->title;
        $description = $row->description;
        $image = $row->image;
        echo $image."<br>";
        $arr = array($blog_id, $title, $description, $image);
        $jsarr = json_encode($arr);
        $_SESSION['editBlog'] = $jsarr;
        header('location:../view/update_blog.php');
        break;
    
    default:
        break;
}
