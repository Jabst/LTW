<?php 
	if(!isset($_GET['id']))
		die ('No id');
	
	include_once('database/connection.php');
	include_once('database/events.php');
	
	try{
		$event = getEventByID($_GET['id']);
		if($event === false)
			die("Yo mate no such post.");
		$paragraphs = explode("\n", $event['fulltext']);
	}catch (PDOException $e){
		die($e->getMessage());
	}

	include_once('templates/header.php');
	include_once('templates/event.php');
	include_once('templates/footer.php');

?>