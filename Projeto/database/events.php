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
		$stmt = $db->prepare('SELECT * FROM Events WHERE id = :id');
		$stmt->bindParam(':id',$id, PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetch();
		
		return $result;
	}
	
	function updateEvent($id, $title, $introduction, $fulltext){
		global $db;
		$stmt = $db->prepare('UPDATE events SET title = ?, introduction = ?, fulltext = ? WHERE id = ?');
		$stmt->execute(array($title,$introduction,$fulltext,$id));
	}

?>