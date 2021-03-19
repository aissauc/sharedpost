<?php

class Posts extends Controller {

	public function __construct() {
		if(!isLoggedIn()) {
			redirect('users/login');
		}

		$this->PostModel = $this->model('Post');
	}

	public function index()
	{
		$this->PostModel->getPosts();
		$posts = $this->PostModel->getPosts();
		$data = [
			'posts' => $posts
		];

		// Load the view
		$this->view('Posts/index', $data);
	}

}


