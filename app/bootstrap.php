<?php

// // Load libraries files

// require_once('libraries/Core.php');
// require_once('libraries/Controller.php');
// require_once('libraries/Database.php');


// Autoloader Core libraries
spl_autoload_register(function($className) {
    
    require_once('libraries/'. $className .'.php');

});

