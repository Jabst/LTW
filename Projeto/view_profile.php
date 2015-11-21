<?php 

	if(!isset($_GET['id']))
		die('NO ID FOUND!');
	
	include_once('database/connection.php');
	include_once('database/users.php');
	
	session_start();
	
	try{
		$user = getUserByID($_GET['id']);
		if($user === false)
			die("THAT USER IS NOT HERE");
		
	}catch(PDOException $e){
		die($e->getMessage());
	}
	
	include_once('templates/header.php');
	include_once('templates/user.php');
	include_once('templates/footer.php');

	?>