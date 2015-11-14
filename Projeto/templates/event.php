<section id="events">
	<article>
		<h2> <? echo $event['title'] ?> </h2>
		<p> <? echo $event['introduction'] ?> </p>
		
		<? foreach ($paragraphs as $paragraph){
			if (trim ($paragraph) != '') { ?>
				<p> <? echo $paragraph ?> </p>
			<? } ?>
		<? } ?>
		
		<a href="edit_event.php?id=<? echo $event['id'] ?>"> Edit </a> 	
	</article>
</section>