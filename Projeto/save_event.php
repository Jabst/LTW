<?php
	
	if(!isset($_POST['id'])) 
		die('No ID');
	
	if(!isset($_POST['title']) || trim($_POST['title']) == '')
		die('Title is Mandatory');
	
	include_once('database/connection.php');
	include_once('database/events.php');
	
	
	try{
		updateEvent($_POST['id'], $_POST['title'], $_POST['introduction'], $_POST['fulltext']);
	}catch (PDOException $e){
		die($e->getMessage());
	}
	
	header('Location: view_event.php?id=' . $_POST['id']);

	?>