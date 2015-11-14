<form action="save_event.php" method="post">
	<input type="hidden" name="id" value="<? echo $event['id'] ?>">
	
	<label>Title:
		<input type="text" name="title" value="<? echo $event['title']?>">
	</label>
	
	<label>Introduction:
		<input type="text" name="introduction" value="<? echo $event['introduction']?>">
	</label>
	
	<label>FullText:
		<textarea name="fulltext"><?php echo $event['fulltext'] ?></textarea>
	</label>
	
	<input type="submit" value="Save">
</form>