<?php
	include_once('connection.php');
	
	$db = connect();
	
	function getAllEvents(){
		global $db;
		$stmt = $db->prepare('SELECT * FROM events');
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;
	}
	
	function getEventByID($id){
		global $db;
		$stmt = $db->prepare('SELECT * FROM events WHERE id = :id');
		$stmt->bindParam(':id',$id, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch();
		
		return $result;
	}
	
	function updateEvent($id, $title, $introduction, $fulltext, $image_id, $event_type){
		global $db;
		$stmt = $db->prepare('UPDATE events SET title = ?, introduction = ?, fulltext = ?, image_id = ?, event_type = ? WHERE id = ?');
		$stmt->execute(array($title,$introduction,$fulltext,$image_id,$event_type,$id));
	}
	
	function addEvent($title, $introduction, $fulltext,$user_id,$image_id,$event_type){
		global $db;
		$stmt = $db->prepare('INSERT INTO events VALUES (null,?,?,?,?,?,?)');
		$stmt->execute(array($title,$introduction,$fulltext,$user_id,$image_id,$event_type));
	}
	
	function belongsToUser($user_id, $id){
		global $db;
		$stmt = $db->prepare('SELECT * FROM events WHERE user_id = ? AND id = ?');
		$stmt->execute(array($user_id,$id));
		$result = $stmt->fetchAll();
		
		if($result){
			return true;
		}
		
		return false;
	}
	
	function userIsGoing($event_id,$user_id){
		global $db;
		$stmt = $db->prepare('INSERT INTO attendance(events_id, user_id) VALUES (?,?)');
		$stmt->execute(array($event_id,$user_id));		
	}
	
	function getAllAttendances_Event($event_id){
		global $db;
		$stmt = $db->prepare('SELECT * FROM attendance WHERE events_id = ?');
		$stmt->execute(array($event_id));
		$result = $stmt->fetchAll();
		
		return $result;
	}
	
	function userGoing($event_id, $user_id){
		global $db;
		$stmt = $db->prepare('SELECT * FROM attendance WHERE events_id = ? AND user_id = ?');
		$stmt->execute(array($event_id,$user_id));
		$result = $stmt->fetchAll();
		
		if($result){
			return true;
		}
		
		return false;
	}
	
	function userIsNotGoing($event_id,$user_id){
		global $db;
		$stmt = $db->prepare('DELETE FROM attendance WHERE events_id = ? AND user_id = ?');
		$stmt->execute(array($event_id,$user_id));
	}
	
	function setImage_events($image_id,$event_id){
		global $db;
		$stmt = $db->prepare('UPDATE events SET image_id = ? WHERE id = ?');
		$stmt->execute(array($image_id,$event_id));
				
	}

?>