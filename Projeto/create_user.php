<?php

	include_once('database/connection.php');
	include_once('database/users.php');
	
	try{
		addUser($_POST['name'], $_POST['email']);
	}catch (PDOException $e){
		die($e->getMessage());
	}

	header('Location: index.php');
?>