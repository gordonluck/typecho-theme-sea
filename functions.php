<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}