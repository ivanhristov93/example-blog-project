<?php
function router($type, $view) {
    if( file_exists(MODULE_DIR.$type))
    {
        if( file_exists(MODULE_DIR.$type."/".$view.'.php')){
            return require_once MODULE_DIR.$type.'/'.$view.'.php';
        }
    }
    require_once MODULE_DIR . "home/home.php";
}