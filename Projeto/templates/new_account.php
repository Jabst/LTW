<form action="create_user.php" method="post">

	<label>Username:
		<input type="text" id="name" name="name">
	</label>
	
	<label>Password:
		<input type="password" id="password" name="password">
	</label>
	
	<label>Email:
		<input type="text" id="email" name="email">
	</label>

	<input type="submit" id="submit_button" value="Register">
	
</form>

<span id="username_warning"></span>
<span id="password_warning"></span>
<span id="email_warning"></span>

<script type="text/javascript" src="jscript/user_register.js"></script>