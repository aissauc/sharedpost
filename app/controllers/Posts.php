<?php

class Posts extends Controller {

	public function __construct() {
		if(!isLoggedIn()) {
			redirect('users/login');
		}
	}

	public function index()
	{
		$data = [];

		// Load the view
		$this->view('Posts/index');
	}

}


