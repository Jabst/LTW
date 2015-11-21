<section id="events">
	
	<?php foreach($events as $event) {?>
	<article>
		<h2> <? echo $event['title'] ?></h2>
		<p> <? echo $event['introduction'] ?></p>
		<img src="images/thumbs_small/<?php echo $event['image_id'] ?>.jpg" />
		<p> Event type: <?php echo $event['event_type'] ?> </p>
		<a href="view_event.php?id=<? echo $event['id']?>">READ MORE <--></a>
	</article>
	
	<? } ?>
</section>