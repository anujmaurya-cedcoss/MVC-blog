<?php
// print_r(__DIR__);die;
// require_once('./library/php-activerecord/ActiveRecord.php');
// require_once '../library/php-activerecord/ActiveRecord.php';
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/src');

$PATH = APP_PATH . '/library/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('../public/model');
    $cfg->set_connections(array('development' => 'mysql://root:secret@mysql-server/blog'));
});
