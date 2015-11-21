<form action="save_event.php" method="post" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<? echo $event['id'] ?>">
	
	<label>Title:
		<input type="text" name="title" value="<? echo $event['title']?>">
	</label>
	
	<label>Introduction:
		<input type="text" name="introduction" value="<? echo $event['introduction']?>">
	</label>
	
	<label>FullText:
		<textarea name="fulltext" rows="4" cols="50"><?php echo $event['fulltext'] ?></textarea>
	</label>
	
	<br>
	
	<label>Event Type:
		<select name="event" id="event_type">
			<option value="Concert">Concert</option>
			<option value="Convention">Convention</option>
			<option value="Meeting">Meeting</option>
			<option value="Party">Party</option>
			<option value="Wedding">Wedding</option>
			<option value="Other">Other</option>
		</select>
	</label>
	
	<br>
	
	<label>Upload Image:
		<input type="file" name="image"/>
	</label>
	
	
	<input type="submit" value="Save">
</form>

