<?php 

	session_start();
	
	include_once('database/connection.php');
	include_once('database/users.php');
		
	if($_SESSION['id'] = (userExists($_POST['username'], $_POST['password']))){
		$_SESSION['username'] = $_POST['username'];
	}
	else{
		header ('Location: ' . $_SERVER['HTTP_REFERER']);
		session_destroy();
		die('User not found');
	}
	
	header ('Location: ' . $_SERVER['HTTP_REFERER']);
	
	?>