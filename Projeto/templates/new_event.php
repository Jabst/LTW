<form action="create_event.php" method="post" enctype="multipart/form-data">

	<input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">

	<label>Title:
		<input type="text" name="title">
	</label>
	
	<label>Introduction:
		<input type="text" name="introduction">
	</label>
	
	<label>Fulltext:
		<textarea name="fulltext" rows="4" cols="50"></textarea>
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
		<input type="file" name="image" />
	</label>
	
	
	
	<input type="submit" value="Submit">
</form>

<script type="text/javascript" src="jscript/new_event.js"></script>