<?php

require 'config/paths.php';
require 'config/database.php';
require 'config/constants.php';

//Also spl_autoload_register
function __autoload($class)
{
    require LIBS_PATH . "$class.php";
}




/*
// autoloader nutzen!!

require LIBS_PATH . 'Bootstrap.php';
require LIBS_PATH . 'Controller.php';
require LIBS_PATH . 'Model.php';
require LIBS_PATH . 'View.php';

//Library
require LIBS_PATH . 'Database.php';
require LIBS_PATH . 'Session.php';
require LIBS_PATH . 'Hash.php';
*/


$app = new Bootstrap();
?>
