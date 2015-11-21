<?php 

	include_once('database/connection.php');
	include_once('database/users.php');
	
	session_start();
	
	include_once('templates/header.php');
	include_once('templates/new_account.php');
	include_once('templates/footer.php');

?>