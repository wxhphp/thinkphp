<?php
//ThinkPHP 后台单一入口文件

define('APP_DEBUG', 'true');//开启DEBUG

define('THINK_PATH','./ThinkPHP/');//底层框架的位置
define('APP_NAME','Admin');//定义项目名称
define('APP_PATH', './Admin/');//定义项目位置

require THINK_PATH.'ThinkPHP.php';
?>