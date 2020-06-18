<?php if(acessoUsuarioEstaLogado()): ?>
	<div class="table">
		<h1>Listar Eventos</h1>

		<a class="link-add" href="overview/adicionar">Adicionar novo evento</a>

		<div class="title-table">
			<div class="table-info">
				<p>Título</p>
				<p>Data</p>
				<p>Cidade</p>
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
				</div>

				<div class="table-control">
					<p><a href="overview/visualizar/<?=$evento['id_overview']?>"><img src="publico/img/icon/eye.svg"></a></p>
					<p><a href="overview/editar/<?=$evento['id_overview']?>"><img src="publico/img/icon/edit.svg"></a></p>
					<p><a href="overview/deletar/<?=$evento['id_overview']?>"><img src="publico/img/icon/delete.svg"></a></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php else: ?>
	<?php foreach ($eventos as $evento): ?>
		<div class="event-box">
			<img src="<?=$evento['banner']?>" width="10%">

			<div class="event-content">
				<?php
					$date = explode('-',$evento['date_show']);
					$finaldate = $date[2].'/ '.$date[1].'/ '.$date[0];

					$address = str_replace(" ", "+", $evento['local_show']);
					$address = $evento['city'].'+'.$address;
				?>

				<p><?=$evento['title']?></p>
				<p><?=$finaldate?></p>
				<p><?=$evento['city']?></p>
			</div>

			<iframe src="https://maps.google.com/maps?q=<?=$address?>&output=embed" frameborder="0"></iframe>
		</div>
	<?php endforeach; ?>
<?php endif; ?>