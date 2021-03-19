<?php
session_start();
/*
 * Flash msg 
 * Example - flashMsg('success_register', 'You are now registered', 'default class seccess')
 * Display in view echo flashMsg('success_register')
*/

function flashMsg($name = '', $message = '', $class = 'alert alert-success') {
	if (!empty($name)) {
		if (!empty($name) && empty($_SESSION[$name])) {
			if (!empty($_SESSION[$name])) {
				unset($_SESSION[$name]);
			}
			if (!empty($_SESSION[$name . '_class'])) {
				unset($_SESSION[$name . '_class']);
			}
			$_SESSION[$name] = $message;
			$_SESSION[$name . '_class'] = $class;
		} elseif (empty($message) && !empty($_SESSION[$name])) {
			$class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
			echo '<div class="' . $class .'" id="msg-flash ">' . $_SESSION[$name] . '</div>';
			unset($_SESSION[$name]);
			unset($_SESSION[$name . '_class']);
		}

	}
}

function isLoggedIn() {
	if (isset($_SESSION['user_id'])) {
		return true;
	} else {
		return false;
	}
}	



