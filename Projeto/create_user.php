<?php

	include_once('database/connection.php');
	include_once('database/users.php');
	
	try{
		$user = getName_findUserByUsername($_POST['name']);
		if(!isset($user)){
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			die();
		}
		if(strlen($_POST['password']) < 7){
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			die();
		}
		/*if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			die();
		}*/
		
	}catch(PDOException $e){
		die($e->getMessage());
	}
		
	try{
		addUser($_POST['name'], $_POST['email'],$_POST['password']);
	}catch (PDOException $e){
		die($e->getMessage());
	}

	header('Location: index.php');
?>