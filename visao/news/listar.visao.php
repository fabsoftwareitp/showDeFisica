<div class="table">
	<h1>Listar notícias</h1>

	<a class="link-add" href="news/adicionar">Adicionar nova notícia</a>

	<div class="title-table">
		<div class="table-info">
			<p id="id">ID</p>
			<p>Imagem</p>
			<p>Título</p>
		</div>
		<div class="table-control">
			<p>View</p>
			<p>Edit</p>
			<p>Delete</p>
		</div>
	</div>

	<?php foreach ($news as $new): ?>
		<div class="table-content">
			<div class="table-info">
				<p id="id"><?=$new['id_news']?></p>
				<p><img src="<?=$new['images']?>"></p>
				<p><?=$new['title']?></p>
			</div>
			<div class="table-control">
				<p><a href="news/visualizar/<?=$new['id_news']?>"><img src="publico/img/icon/eye.svg"></a></p>
				<p><a href="news/editar/<?=$new['id_news']?>"><img src="publico/img/icon/edit.svg"></a></p>
				<p><a href="news/deletar/<?=$new['id_news']?>"><img src="publico/img/icon/delete.svg"></a></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>