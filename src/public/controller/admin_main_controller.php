<?php
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
        header('location:../view/admin_main.php');
        break;
    case 'edit':

        break;
    default:
        # code...
        break;
}
