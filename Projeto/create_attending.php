<?php

	include_once('database/connection.php');
	include_once('database/events.php');
	
	try{
		userIsGoing($_POST['event_id'], $_POST['user_id']);
	}catch (PDOException $e){
		die($e->getMessage());
	}

	header('Location: ' .  $_SERVER['HTTP_REFERER']);
?>