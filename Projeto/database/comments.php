<?php 

	include_once('connection.php');
	
	$db = connect();
	
	function getAllComments($id_event){
		global $db;
		$stmt = $db->prepare('SELECT * FROM comments WHERE event_id = ?');
		$stmt->execute(array($id_event));
		$result = $stmt->fetchAll();
		
		return $result;
	}
	
	function getCommentById($id){
		global $db;
		$stmt = $db->prepare('SELECT * FROM comments WHERE id = ?');
		$stmt->execute(array($id));
		$result = $stmt->fetch();
		
		return $result;
	}
	
	function addComment($event_id, $user_id, $text){
		global $db;
		$stmt = $db->prepare('INSERT INTO comments VALUES (null,?,?,?)');
		$stmt->execute(array($event_id,$user_id,$text));
	}
	
	function isUsersComment($userID){
		global $db;
		$stmt = $db->prepare('SELECT * FROM comments WHERE user_id = ?');
		$stmt->execute(array($userID));
		$result = $stmt->fetchAll();
		
		if($result){
			return true;
		}
		return false;
		
	}
	
	?>