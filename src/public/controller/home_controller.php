<?php
session_start();
$_SESSION['blogs'] = [];
require_once('../../library/php-activerecord/ActiveRecord.php');
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
$blogs = AllBlog::find('all');
foreach ($blogs as $key => $blogObject) {
    array_push($_SESSION['blogs'], $blogObject);
}
?>