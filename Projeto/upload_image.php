<?php

	include_once('database/connection.php');
	include_once('database/images.php');
	include_once('database/users.php');
	
	try{
		$id = addImage();
		setImage($id,$_POST['user_id']);
	}catch(PDOException $e){
		die($e->getMessage());
	}
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	?>