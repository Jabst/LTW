<form action="save_user.php" method="post">

	<input type="hidden" name="id" value="<? echo $user['id'] ?>">
	
	<label>Old Password:
		<input type="password" name="old_password" id="old_password" >
	</label>
	
	<label>New Password:
		<input type="password" name="new_password" id="new_password">
	</label>
	
	<label>Retype New Password:
		<input type="password" name="new_password2" id="new_password2">
	</label>
	
	<input type="submit" value="Save" id="submit">
	
	
</form>

<span id="password_warning"><span>

<form action="upload_image.php" method="post" enctype="multipart/form-data">

	<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']?>" />
	<input type="file" name="image" />
	<input type="submit" name="upload" />

</form>

<script type="text/javascript" src="jscript/edit_user.js"></script>