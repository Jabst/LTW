<?php session_start();

	if(!isset($_GET['id']))
		die ('No id');
	
	include_once('database/connection.php');
	include_once('database/events.php');
	include_once('database/comments.php');
	include_once('database/users.php');
	
	
	
	try{
		$event = getEventByID($_GET['id']);
		if($event === false)
			die("Yo mate no such post.");
		$paragraphs = explode("\n", $event['fulltext']);
		
		$comments = getAllComments($_GET['id']);
		
		$attendings = getAllAttendances_Event($_GET['id']);		
		
	}catch (PDOException $e){
		die($e->getMessage());
	}

	include_once('templates/header.php');
	include_once('templates/event.php');
	include_once('templates/footer.php');

?>