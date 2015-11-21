<?php

	include_once('database/connection.php');
	include_once('database/comments.php');
	
	try{
		addComment($_POST['event_id'],$_POST['user_id'],$_POST['text']);
	}catch (PDOException $e){
		die($e->getMessage());
	}
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);

	?>