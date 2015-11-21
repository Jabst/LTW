<section id="user">
	<div>
		<h2> <? echo $user['name'] ?> </h2>
		<p> <? echo $user['email'] ?> </p>
		<img src="images/thumbs_medium/<?php echo $user['image_id']; ?>.jpg">
		<?php if(isset($_SESSION['id'])){
				if(isUser($_SESSION['id'],$user['id'])) 
		{
		  ?>
		<a href="edit_user.php?id=<? echo $user['id'] ?>"> EDIT My Profile </a>
		<? }  } ?>
	</div>

</section>