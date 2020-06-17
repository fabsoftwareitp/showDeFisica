<div class="view">
	<div class="view-title">
		<h1><?=$evento['title']?></h1>
		<h3><?=$evento['subtitle']?></h3>
	</div>
	<img src="<?=$evento['banner']?>" alt="" width="100%">
</div>

<?php $address = str_replace(" ", "+", $evento['local_show']);?>
<iframe src="https://maps.google.com/maps?q=<?=$address?>&output=embed" frameborder="0"></iframe>