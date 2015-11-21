<?php

	$path = "../database";
	
	include_once('../database/connection.php');
	include_once('../database/users.php');
	
	try{
		if (isset($_POST['variable'])){
			$user = getName_findUserByUsername($_POST['variable']);
			
		}
		
	}catch(PDOException $e){
		die($e->getMessage());
	}

	if(isset($user)){
		echo $user;
	}else{
		echo "invalid";
	}
	
	?>