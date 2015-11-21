<section id="events">
	<article>
		<h2> <? echo $event['title'] ?> </h2>
		<p> <? echo $event['introduction'] ?> </p>
		<img src="images/thumbs_medium/<?php echo $event['image_id'] ?>.jpg" />
		<br>
		<p> Event type: <?php echo $event['event_type'] ?> </p>
		<? foreach ($paragraphs as $paragraph){
			if (trim ($paragraph) != '') { ?>
				 <p> <? echo $paragraph ?> </p>
			<? } ?>
		<? } ?>
		
		<?php if(isset($_SESSION['id'])){
				if(belongsToUser($_SESSION['id'],$event['id'])) 
		{
		  ?>
		 	<a href="edit_event.php?id=<? echo $event['id'] ?>"> Edit </a>		
		<? }  } ?>
		
		
		<div id="attending_form">
		
			<?php if(isset($_SESSION['id'])) { ?> 
				<?php if(!(userGoing($event['id'],$_SESSION['id']))) { ?>
				<form action="create_attending.php" method="post" />
					<input type="hidden" name="event_id" value="<?php echo $event['id'] ?>">
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
					
					<input type="submit" value="Going" />
				</form>
				<? } else { ?>
					<form action="delete_attending.php" method="post" />
					<input type="hidden" name="event_id" value="<?php echo $event['id'] ?>">
					<input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
					
					<input type="submit" value="Not Going" />
				</form>			
				<? } ?>
			
			<? } ?>
		</div>
		
		<div id="attending_users">
			<?php if(isset($attendings)) { ?>
				<p> Users Going: </p>
				<?php foreach($attendings as $attending) { ?>	
					<p> <? $result = getUserByID($attending['user_id']);
						echo $result['name']; ?> </p>
				<? } ?>
			<? } ?>
		</div>
		
		<div id="comments">
			<h3> Comments </h3>
			
			<?php if(isset($_SESSION['id'])) { ?>
			
				<form action="create_comment.php" method="post">
					
					<input type="hidden" name="event_id" value="<? echo $event['id'] ?>">
					<input type="hidden" name="user_id" value="<? echo $_SESSION['id'] ?>">
					<label>Comment:
						<textarea rows="5" cols="40" name="text"></textarea>
					</label>
					<input type="submit" value="comment" />
				</form>
			<? } ?>
			
			<? foreach($comments as $comment){ ?>
				
					<p> <? 	$result = getUserByID($comment['user_id']);
					
							echo $result['name']; ?> 
					</p>
					<p> <? echo $comment['text'] ?>
				
			<? } ?>
		</div>
	</article>
</section>