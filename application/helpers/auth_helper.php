<?php

if (!function_exists('redirectToHomeWhenUserLoggedIn')) {
	function redirectToHomeWhenUserLoggedIn() {
		$ci = &get_instance();
		if ($ci->session->userdata(SESSION_KEY_USER)) {
			redirect('/home');	
		};
	}
}

if (!function_exists('redirectToLoginWhenUserNotLoggedIn')) {
	function redirectToLoginWhenUserNotLoggedIn() {
		$ci = &get_instance();
		if (!$ci->session->userdata(SESSION_KEY_USER)) {
			redirect('/login');	
		};
	}
}
