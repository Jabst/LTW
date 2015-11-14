<section id="events">
	
	<?php foreach($events as $event) {?>
	<article>
		<h2> <? echo $event['title'] ?></h2>
		<p> <? echo $event['introduction'] ?></p>
		<a href="view_event.php?id=<? echo $event['id']?>">READ MORE <--></a>
	</article>
	
	<? } ?>
</section>