<?php

// Load config file
require_once('config/config.php');

// Load url helpers
require_once('helpers/url_helper.php');

// Load session helpers to display msg when registered
require_once('helpers/session_helper.php');

// // Load libraries files

// require_once('libraries/Core.php');
// require_once('libraries/Controller.php');
// require_once('libraries/Database.php');


// Autoloader Core libraries
spl_autoload_register(function($className) {
    
    require_once('libraries/'. $className .'.php');

});

