<?php

	if(!isset($_GET['id']))
		die('Yo mate the ID is wrong');
	
	include_once('database/connection.php');
	include_once('database/events.php');
	
	try{
		$event = getEventByID($_GET['id']);
	}catch (PDOException $e){
		die($e->getMessage());
	}
	
	include_once('templates/header.php');
	include_once('templates/edit_event.php');
	include_once('templates/footer.php');
	
	?>