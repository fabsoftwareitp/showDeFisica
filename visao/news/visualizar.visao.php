<div class="news-background">
	<img src="<?=$new['images']?>" alt="">
	<div class="legenda">
		<p class="title"><?=$new['title']?></p>
		<p class="subtitle"><?=$new['subtitle']?></p>
	</div>
</div>
<div class="news-content">
	<?php foreach ($text as $paragraph) :?>
		<div class="paragraph">
			<p><?=$paragraph?></p>
		</div>
	<?php endforeach;?>
</div>
