<?php
//namespace MVC\app\controller;

define('DS', DIRECTORY_SEPARATOR );

define('APP_PATH', realpath(dirname(__FILE__)));
define('VIEWS_PATH', APP_PATH.DS.'View'.DS);


define('PUBLIC_PATH', $_SERVER['DOCUMENT_ROOT'].DS.'public');
define('TEMPLETE_PATH', PUBLIC_PATH.DS.'templete'.DS);

define('TEMPLETE_DIRECTORY_HEAD_DIRECTORY_PATH', TEMPLETE_PATH.DS.'templete_head');

define('TEMPLETE_DIRECTORY_START_HEAD_FILE_PATH', TEMPLETE_DIRECTORY_HEAD_DIRECTORY_PATH.DS.'templete_head_start.php');
define('TEMPLETE_DIRECTORY_END_HEAD_FILE_PATH', TEMPLETE_DIRECTORY_HEAD_DIRECTORY_PATH.DS.'templete_head_end.php');

define('TEMPLETE_DIRECTORY_BODY_WRAPPER_PATH', TEMPLETE_PATH.DS.'templete_body_wrapper');
define('TEMPLETE_BODY_WRAPPER_START_PATH', TEMPLETE_DIRECTORY_BODY_WRAPPER_PATH.DS.'body_wrapper_start.php');
define('TEMPLETE_BODY_WRAPPER_END_PATH', TEMPLETE_DIRECTORY_BODY_WRAPPER_PATH.DS.'body_wrapper_end.php');

define('TEMPLETE_HEADER', TEMPLETE_PATH.DS.'header.php');

define('LIBS_PATH', PUBLIC_PATH.DS.'libs');

define("CSS", '/public/templete/CSS/');
define("JS", '/public/templete/JS/');

?>