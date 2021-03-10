<?php

/**
 * Base Controller 
 * Load models & viwes
 */

 class Controller {

    // Load models
    public function model($model) {
        // require model file
        require_once('../app/models/' . $model . '.php');

        // Instantiate the model
        return new $model();

    }

    // Load viwes
    public function view($view, $data = []) {
        // Check for view file 
        if (file_exists('../app/views/' . $view . '.php')) {
            // if view file exist, require it
            require_once('../app/views/' . $view . '.php');

        } else {
            die('view does not exist');
        }
    }

 }