<section id="users">

	<?php foreach($users as $user) { ?>
	<div id="user">
		<p> <? echo $user['name'] ?></p>
		<p> <?echo $user['email'] ?></p>
		<img src="images/thumbs_small/<?php echo $user['image_id']; ?>.jpg">
		<a href="view_profile.php?id=<?echo $user['id']?>"> See this profile </a>
	</div>
	
	<? }  ?>

</section>