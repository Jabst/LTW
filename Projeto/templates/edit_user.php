<form action="save_user.php" method="post">

	<input type="hidden" name="id" value="<? echo $user['id'] ?>">
	
	<label>Name:
		<input type="text" name="name" value="<? echo $user['name'] ?>">
	</label>
	
	<label>Email:
		<input type="text" name="email" value="<? echo $user['email'] ?>">
	</label>

	<input type="submit" value="Save">
		
</form>