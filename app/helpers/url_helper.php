<?php

	// Simple redirect page
	function redirect($page) {
		header('location: ' . URL_ROOT . '/' . $page);
		exit();
	}
