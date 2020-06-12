<div class="table">
	<h1>Listar Eventos</h1>
	
	<a class="link-add" href="overview/adicionar">Adicionar novo evento</a>
	
	<div class="title-table">
		<div class="table-info">
			<p>Título</p>
			<p>Data</p>
			<p>Cidade</p>
			<p>Local</p>
		</div>
		<div class="table-control">
			<p>View</p>
			<p>Edit</p>
			<p>Delete</p>
		</div>
	</div>
	
	<?php foreach ($eventos as $evento): ?>
		<div class="table-content">
			<div class="table-info">
				<p><?=$evento['title']?></p>
				<p><?=$evento['date_show']?></p>
				<p><?=$evento['city']?></p>
				<p><?=$evento['local_show']?></p>
			</div>
			<div class="table-control">
				<p><a href="overview/visualizar/<?=$evento['id_overview']?>"><img src="publico/img/icon/eye.svg"></a></p>
				<p><a href="overview/editar/<?=$evento['id_overview']?>"><img src="publico/img/icon/edit.svg"></a></p>
				<p><a href="overview/deletar/<?=$evento['id_overview']?>"><img src="publico/img/icon/delete.svg"></a></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>