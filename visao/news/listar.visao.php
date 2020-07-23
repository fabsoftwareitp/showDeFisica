<div class="list">

	<?php
		if (count($news) == 0){ $msg = "Vazio por aqui"; }
		elseif (count($news) == 1){ $msg = count($news)." Notícia registrada";}
		else { $msg = count($news)." Notícias registradas";}
	?>
	<h1><?=$msg?></h1>

	<a class="link-add" href="./news/adicionar">Adicionar notícia</a>

	<div class="title-list">
		<div class="list-info">
			<p class="id">ID</p>
			<p class="name">Título</p>
		</div>

		<div class="list-control">
			<p>Config</p>
		</div>
	</div>

	<?php foreach ($news as $new): ?>
		<div class="list-content">
			<div class="list-info">
				<p class="id"><?=$new['id_news']?></p>
				<p class="name"><?=$new['title']?></p>
			</div>

			<div class="list-control">
				<!-- <input type="radio" onclick="showList()" id="new_check" hidden> -->
				<!-- <label for="new_check"><img src="./publico/img/icon/more.svg" alt=""></label> -->

				<!-- <div> -->
					<a href="./news/visualizar/<?=$new['id_news']?>">View</a>

					<!-- <a href="./news/editar/<?=$new['id_news']?>">Editar</a> -->
					<!-- <a href="./news/deletar/<?=$new['id_news']?>">Deletar</a> -->
				<!-- </div> -->
			</div>
		</div>
	<?php endforeach; ?>
</div>