<?php

	if(!isset($_GET['id']))
		die('No ID found');
	
	include_once('database/connection.php');
	include_once('database/events.php');
	
	session_start();
	
	try{
		$event = getEventByID($_GET['id']);
	}catch (PDOException $e){
		die($e->getMessage());
	}
	
	include_once('templates/header.php');
	include_once('templates/edit_event.php');
	include_once('templates/footer.php');
	
	?>