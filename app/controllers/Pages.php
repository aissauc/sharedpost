<?php

class Pages extends Controller {

    public function __construct() {

    }

    public function index() {
        if(isLoggedIn()) {
            redirect('posts');
        }
        $data = [
            'title'       => 'Share posts',
            'description' => 'Social network to share posts'
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title'       => 'About us',
            'description' => 'App to share posts between friends built on traveryMvc framework'
        ];
        $this->view('pages/about', $data);
    }

}