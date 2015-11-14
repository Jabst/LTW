<section id="users">

	<?php foreach($users as $user) { ?>
	<div id="user">
		<h2> <? echo $user['name'] ?></h2>
		<p> <?echo $user['email'] ?></p>
		<a href="view_profile.php?id=<?echo $user['id']?>"> Czech this profile !! </a>
	</div>
	
	<? }  ?>

</section>