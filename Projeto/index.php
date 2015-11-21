<?php
	include_once('database/connection.php');
	include_once('database/events.php');

	session_start();
	
	try{
		$events = getAllEvents();
	}catch (PDOException $e){
		die($e->getMessage());
	}

	include_once('templates/header.php');
	include_once('templates/events.php');
	include_once('templates/footer.php');
	
?>