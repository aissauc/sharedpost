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

	public function add() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
				'title' => $_POST['title'],
				'body' => $_POST['body'],
				'user_id' => $_SESSION['user_id'],
				'title_err',
				'body_err'
			];

			// Validate inputs
			if(empty($data['title'])) {
				$data['title_err'] = 'Please enter the titlte';
			}
			if(empty($data['body'])) {
				$data['body_err'] = 'Please enter the body text';
			}

			if (empty($data['title_err']) && empty($data['body_err'])) {
				//validated
				if ($this->PostModel->addPost($data)) {
					flashMsg('post_msg', 'You succesfully added the post');
					redirect('posts');
				} else {
					die('Something went wrong');
				}
			} else {
				// Load the view with errors
				$this->view('posts/add', $data);
			}


		} else {
			$data = [
				'title' => '',
				'body' => ''
			];

			$this->view('posts/add', $data);
		}

	}	
}


