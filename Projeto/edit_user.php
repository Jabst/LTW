<?php

	if(!isset($_GET['id']))
		die('ID NOT SET');
	
	include_once('database/connection.php');
	include_once('database/users.php');
	
	session_start();
	
	try{
		$user = getUserByID($_GET['id']);
	}catch (PDOException $e){
		die($e->getMessage());
	}
	
	include_once('templates/header.php');
	include_once('templates/edit_user.php');
	include_once('templates/footer.php');
		
	
	?>