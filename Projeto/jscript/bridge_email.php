<?php

	$path = "../database";
	
	include_once('../database/connection.php');
	include_once('../database/users.php');
	
	try{
		if (isset($_POST['variable'])){
			$email = getEmail_findEmail($_POST['variable']);
			
		}
		
	}catch(PDOException $e){
		die($e->getMessage());
	}

	if(isset($email)){
		echo $email;
	}else{
		echo "invalid";
	}
	
	?>