<?php
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
$user_id = $_POST['uid'];
$blog_id = $_POST['bid'];
$u_in_like = Like::find_by_user_id($user_id);
$b_in_like = Like::find_by_blog_id($blog_id);
if (!isset($u_in_like) || !isset($b_in_like)) {
    Like::create(array('blog_id' => $blog_id, 'user_id' => $user_id));
    $stmt = AllBlog::find_by_id($blog_id);
    $stmt -> likes = ($stmt -> likes) + 1;
    $stmt -> save();
}
