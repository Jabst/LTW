<?php

	include_once('database/connection.php');
	include_once('database/users.php');
	
	try{
		$users = getAllUsers();
	}catch(PDOException $e){
		die($e->getMessage());
	}

	include_once('templates/header.php');
	include_once('templates/users.php');
	include_once('templates/footer.php');
	
?>