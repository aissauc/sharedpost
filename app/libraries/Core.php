<?php

/**
 * App Core Class
 * Create Url and Load Controller
 * URL FORMAT - controller/method/params
 */

class Core {

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];


    public function __construct() {
        $url = $this->getUrl();
        
        //Look in controllers for first value
        if (file_exists('../app/controllers/'. ucwords($url[0]) . '.php')) {
            //If exist, set as controller
            $this->currentController = $url[0];
            // unset undex 0 of url
            unset($url[0]);
        }

        // Require the Controller
        require_once('../app/controllers/' . $this->currentController . '.php');

        // Instantiate the Controller
        $this->currentController = new $this->currentController;

    }

    public function getUrl() {

        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

    }



}