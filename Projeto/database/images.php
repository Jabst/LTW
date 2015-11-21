<?php

	include_once('database/connection.php');
	
	$db = connect();
	
	function addImage(){
		global $db;
		$stmt = $db->prepare('INSERT INTO images VALUES(NULL)');
		$stmt->execute();
		
		$id = $db->lastInsertId();
		
		$originalFileName = "images/original/$id.jpg";
		$smallFileName = "images/thumbs_small/$id.jpg";
		$mediumFileName = "images/thumbs_medium/$id.jpg";
		
		move_uploaded_file($_FILES['image']['tmp_name'], $originalFileName);
		
		$original = imagecreatefromjpeg($originalFileName);
		
		$width = imagesx($original);
		$height = imagesy($original);
		$square = min($width, $height);
		
		$small = imagecreatetruecolor(200,200);
		imagecopyresized($small, $original, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 200, 200, $square, $square);
		imagejpeg($small, $smallFileName);
		
		$mediumwidth = $width;
		$mediumheight = $height;
		
		if($mediumwidth > 400){
			$mediumwidth = 400;
			$mediumheight = $mediumheight * ($mediumwidth / $width);
		}
		
		$medium = imagecreatetruecolor($mediumwidth, $mediumheight);
		imagecopyresized($medium,$original,0,0,0,0, $mediumwidth, $mediumheight, $width, $height);
		imagejpeg($medium,$mediumFileName);
		
		return $id;
	}
	
	function getImage($id){
		global $db;
		$stmt = $db->prepare('SELECT * FROM images WHERE id = ?');
		$stmt->execute(array($id));
		$return = $stmt->fetch();
		
		return $return;
	}

	?>