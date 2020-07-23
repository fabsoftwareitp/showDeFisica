<div class="view">
	<img class="img-background" src="<?=$evento['banner']?>">
	<img src="<?=$evento['banner']?>">
</div>

<div class="view-title">
	<?php 
		$finaldate = explode('-', $evento['date_show']);
		$address = str_replace(" ", "+", $evento['local_show']);
	?>

	<h4><?=$finaldate[2].' / '.$finaldate[1].' / '.$finaldate[0]?></p=>
	<h1><?=$evento['title']?></h1>
	<h3><?=$evento['city'].' - '.$evento['local_show']?></h3>

	<iframe src="https://maps.google.com/maps?q=<?=$address?>&output=embed" frameborder="0"></iframe>

	<?php
		if(acessoUsuarioEstaLogado()){$path = "overview/";}
		else{$path = "";}
	?>
	<a href="./<?=$path?>">Voltar</a>
</div>