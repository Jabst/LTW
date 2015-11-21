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
	
	function userExists($username, $password){
		global $db;
		$stmt = $db->prepare('SELECT * FROM users WHERE name = ? AND password = ?');
		$stmt->execute(array($username,sha1($password)));
		$result = $stmt->fetch();
		
		if($result != null){
			return $result['id'];
		}
		
		return false;
	}

	function updateUser($id, $password){
		global $db;
		$stmt = $db->prepare('UPDATE users SET password = ? WHERE id = ?');
		$stmt->execute(array($password,$id));
	}
	
	function addUser($name, $email, $password){
		global $db;
		$stmt = $db->prepare('INSERT INTO users VALUES (null,?,?,?,1)');
		$stmt->execute(array($name,$email,sha1($password)));
	}
	
	function getName_findUserByUsername($username){
		global $db;
		$stmt = $db->prepare('SELECT name FROM users WHERE name = ?');
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		
		return $result;
	}
	
	function getEmail_findEmail($email){
		global $db;
		$stmt = $db->prepare('SELECT email FROM users WHERE email = ?');
		$stmt->execute(array($email));
		$result = $stmt->fetch();
		
		return $result;
	}
	
	function isUser($sessionID,$userID){
		global $db;
		$stmt = $db->prepare('SELECT * FROM users WHERE ? = ?');
		$stmt->execute(array($sessionID,$userID));
		$result = $stmt->fetchAll();
		
		if($result){
			return true;
		}
		return false;
		
	}
	
	function setImage($image_id,$user_id){
		global $db;
		$stmt = $db->prepare('UPDATE users SET image_id = ? WHERE id = ?');
		$stmt->execute(array($image_id,$user_id));
				
	}
	
?>