<?php

	if(!isset($_POST['id']))
		die('NO ID FOUND');
	
	if(!isset($_POST['old_password']) || (!isset($_POST['new_password']) || (!isset($_POST['new_password2']))))
		die('INVALID DATA RECEIVED (SOME OF THE PASSWORDS ARENT SET)');
	
		
	include_once('database/connection.php');
	include_once('database/users.php');
	
	try{
		$pw = getUserById($_POST['id']);
		$pw = $pw['password'];
		
		if(sha1($_POST['old_password']) != $pw){
			header('Location: view_profile.php?id=' . $_POST['id']);
			die('Old password is wrong');
		}
	}catch(PDOException $e){
		die($e->getMessage());
	}
	
	if($_POST['new_password'] != $_POST['new_password2']){
		die('PASSWORDS DO NOT MATCH');
	}
	
	try{
		updateUser($_POST['id'],sha1($_POST['new_password']));
	}catch(PDOException $e){
		die($e->getMessage());
	}
		
	header('Location: view_profile.php?id=' . $_POST['id']);

	?>