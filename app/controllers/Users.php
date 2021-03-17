<?php

class Users extends Controller {

	public function __construct() {
		$this->UserModel = $this->model('User');
	}


	public function register() {
		// Check for post
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// Proccess form

			// Sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

			// Init data
			$data = [
				'name' => trim($_POST['name']),
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'confirm_password' => trim($_POST['confirm_password']),
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => ''	
			];

			// Validate name
			if (empty($data['name'])) {
				$data['name_err'] = 'Please enter name';
			}
			// Validate email
			if (empty($data['email'])) {
				$data['email_err'] = 'Please enter email';
			} else {
				// Check if email exist in database
				if ($this->UserModel->findUserByEmail($data['email'])) {
					$data['email_err'] = 'Email already taken';
				}
			}
			// Validate password
			if (empty($data['password'])) {
				$data['password_err'] = 'Please enter password';

			} elseif (strlen($data['password']) < 6) {
				$data['password_err'] = 'Passowrd must be 6 character at least';
			}

			// Validate name
			if (empty($data['confirm_password'])) {
				$data['confirm_password_err'] = 'please enter confirm password';
			} else {
				if ($data['password'] != $data['confirm_password']) {
					$data['confirm_password_err'] = 'Passowrds do not match';
				}
			}

			// Make sure errors are empty
			if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
				//Validated
				die('success');
			} else {
				// Load the view with errors
				$this->view('users/register', $data);
			}

		} else {
			// Init data
			$data = [
				'name' => '',
				'email' => '',
				'password' => '',
				'confirm_password' => '',
				'name_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => ''	
			];
			// LOad the view
			$this->view('users/register', $data);
		}

	}
	public function login() {
		// Check for post
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// Proccess form
			// Sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
			// Init data
			$data = [
				'email' => trim($_POST['email']),
				'password' => trim($_POST['password']),
				'email_err' => '',
				'password_err' => '',
			];

			// Validate name
			if (empty($data['email'])) {
				$data['email_err'] = 'Please enter email';
			}
			// Validate name
			if (empty($data['password'])) {
				$data['password_err'] = 'Please enter password';
			}

			// Make sure errors are empty
			if (empty($data['email_err']) && empty($data['password_err'])) {
				//Validated
				die('success login');
			} else {
				// Load the view with errors
				$this->view('users/login', $data);
			}


		} else {
			// Init data
			$data = [
				'email' => '',
				'password' => '',
				'email_err' => '',
				'password_err' => ''
			];
			// LOad the view
			$this->view('users/login', $data);
		}

	}

}
