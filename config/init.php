<?php
//Session start
session_start();
//Config file
require_once 'config.php';
//Include helper
require_once 'helper/system_helper.php';




//this version autoloader is for <php 8
// function __autoloader($class_name)
// {
// require_once 'lib/'.$class_name. '.php';
// }

//Autoloader for php 8.2
spl_autoload_register(function ($class_name) {
    require_once 'lib/'.$class_name. '.php';
});






?>