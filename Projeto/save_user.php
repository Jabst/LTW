<?php

	if(!isset($_POST['id']))
		die('NO ID FOUND');
	
	if(!isset($_POST['name']) || !isset($_POST['email']))
		die('NAME AND EMAIL MISSING');
	
	include_once('database/connection.php');
	include_once('database/users.php');
	
	try{
		updateUser($_POST['id'],$_POST['name'],$_POST['email']);
	}catch(PDOException $e){
		die($e->getMessage());
	}
		
	header('Location: view_profile.php?id=' . $_POST['id']);

	?>