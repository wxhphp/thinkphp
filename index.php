<?php
//ThinkPHP 前台单一入口文件

define('APP_DEBUG', 'true');//开启DEBUG

define('THINK_PATH','./ThinkPHP/');//底层框架的位置
define('APP_NAME','Home');//定义项目名称
define('APP_PATH', './Home/');//定义项目位置

require THINK_PATH.'ThinkPHP.php';
?>