<?php

	include_once('database/connection.php');
	include_once('database/events.php');
	include_once('database/images.php');
	
	try{
		$id = addImage();
		addEvent($_POST['title'], $_POST['introduction'],$_POST['fulltext'],$_POST['user_id'],$id,$_POST['event']);		
	}catch (PDOException $e){
		die($e->getMessage());
	}
	
	
	header('Location: index.php');
?>