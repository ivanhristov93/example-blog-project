<?php
define('ROOT_DIR', dirname(__FILE__)."/");
define('CORE_DIR', ROOT_DIR."core/");
define('MODULE_DIR', ROOT_DIR."modules/");

require_once CORE_DIR . "input.php";
require_once CORE_DIR . "pagination.php";
require_once CORE_DIR . "router.php";
require_once CORE_DIR . "db.php";

if(!file_exists(ROOT_DIR."config.php")){
    echo "Config file missing!";
    die();
}

require_once ROOT_DIR . "config.php";

if( ! DEBUG ) {
    ini_set('display_errors', 0);
}

dbInstance();

$type = inputGet('type', 'str', 'home');
$view = inputGet('view', 'str', 'home');

router($type, $view);