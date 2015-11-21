<!DOCTYPE html>
<html>
	<head>
		<title> Estou cansado para inventar coisas engraçadas </title>
		<meta charset="utf-8" >
		
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		
	
	</head>
	<body>
		<header>
			<a href="index.php"><h1>Ipsis verbis</h1></a>
		</header>
		<br>
		<?php if($_SESSION == null) { ?>
		<a href="user_register.php">Create New Account</a>
		<? } ?>
		<a href="user_page.php">Check all users</a>
		<?php if($_SESSION != null) { ?>
			<a href="edit_user.php?id=<?php echo $_SESSION['id'] ?>">Edit My Account</a>
		<? } ?>
		<br>
		<h3> LOGIN ! </h3>
		
		<?php
		
		if($_SESSION != null){
			print_r("Welcome user: ");
			echo $_SESSION['username'];	
		
		?>
		
		<form action="action_logout.php" method="post">
			<input type="submit" value="Logout" />
		</form>
		
		<form action="event_register.php" method="post">
			<input type="submit" value="Create Event" />
		</form>
		
		<?php }else{ ?>
		
		<form action="action_login.php" method="post">
		
			<label>Username:
				<input type="text" name="username" />
			</label>
			<label>Password:
				<input type="password" name="password" />
			</label>
		
			<input type="submit" value="Submit" />
		</form>
		
		<?php } ?>