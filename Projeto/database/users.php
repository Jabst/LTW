<?php
	
	include_once('connection.php');
	
	$db = connect();
	
	function getAllUsers(){
		global $db;
		$stmt = $db->prepare('SELECT * FROM users');
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;
	}
	
	function getUserByID($id){
		global $db;
		$stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
		$stmt->bindParam(':id',$id,PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch();
		
		return $result;
	}

	function updateUser($id, $name, $email){
		global $db;
		$stmt = $db->prepare('UPDATE users SET name = ?, email = ? WHERE id = ?');
		$stmt->execute(array($name,$email,$id));
	}
	
	function addUser($name, $email){
		global $db;
		$stmt = $db->prepare('INSERT INTO users VALUES (null,?,?)');
		$stmt->execute(array($name,$email));
	}
	
?>