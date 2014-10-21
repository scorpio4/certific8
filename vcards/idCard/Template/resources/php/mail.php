<?php
session_start();

require('class.gump.php');

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

	$proceed = false;
	$key = $_SESSION['qaptcha_key'];
	
	if($_POST['captcha'] == 'true') {
	
		if(isset($key) && !empty($key)) {
		
			if(isset($_POST[$key]) && empty($_POST[$key])) {
			
				$proceed = true;
			
			}

		}
		
	} else {
	
		$proceed = true;
	
	}
	
	if($proceed) {
		
		$_POST = GUMP::sanitize($_POST);
		
		$rules = array(
			'name'    => 'required',
			'email'   => 'required|valid_email',
			'message' => 'required'
		);
		
		$filters = array(
			'name'    => 'trim|sanitize_string',
			'email'   => 'trim|sanitize_email',
			'message' => 'trim|sanitize_string'
		);
		
		$validated = GUMP::validate(GUMP::filter($_POST, $filters), $rules);
		
		if($validated) {
		
			$receiver = "email@domain.com";
			$subject = "Website - Contactform";
			
			$header  = "MIME-Version: 1.0" . "\r\n";
			$header .= "Content-type: text/html; charset=utf-8" . "\r\n";
			$header .= "From: " . $_POST['name'] . " <" . $_POST['email'] . ">";
			
			$message = nl2br($_POST['message']);
			
			mail($receiver, $subject, $message, $header);
			
			echo 1;
		
		} else print_r($validated);
		
	} else {
		
		echo 'failed';
		
	}

}