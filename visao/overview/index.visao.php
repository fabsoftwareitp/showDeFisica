<?php if(acessoUsuarioEstaLogado()): ?>
	<div class="list">
		<?php
			if (count($eventos) == 0){ $msg = "Vazio por aqui"; }
			elseif (count($eventos) == 1){ $msg = count($eventos)." Evento registrado";}
			else { $msg = count($eventos)." Eventos registrados";}
		?>
		<h1><?=$msg?></h1>

		<a class="link-add" href="./overview/adicionar">Adicionar evento</a>

		<div class="title-list">
			<div class="list-info">
				<p class="data">Data</p>
				<p class="name">Título</p>
			</div>

			<div class="list-control">
				<p>Config</p>
			</div>
		</div>

		<?php foreach ($eventos as $evento): ?>
			<div class="list-content">
				<div class="list-info">
					<?php $date = explode('-',$evento['date_show']);?>

					<p class="data"><?=$date[2].'/ '.$date[1].'/ '.$date[0]?></p>
					<p class="name">
					<a href="./overview/visualizar/<?=$evento['id_overview']?>"><?=$evento['title']?></a>
				</div>

				<div class="list-control">
					<a href="./overview/editar/<?=$evento['id_overview']?>">Editar</a>
					<a href="./overview/deletar/<?=$evento['id_overview']?>">Deletar</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php else:?>
	<?php if(count($eventos) == 0):?>
		<div class="empty">
			<p>Não há nada por aqui!</p>
		</div>
	<?php else:?>
		<p class="title-overview">Próximos Eventos</p>

		<div class="register-events">
			<?php foreach ($eventos as $evento): ?>
				<a class="event-box" href="./overview/visualizar/<?=$evento['id_overview']?>">
					<img src="<?=$evento['banner']?>">

					<div class="event-content">
						<?php
							$date = explode('-',$evento['date_show']);
							$finaldate = $date[2].'/ '.$date[1].'/ '.$date[0];
						?>

						<h5><?=$finaldate?></h5>
						<h4><?=$evento['title']?></h4>
						<h5><?=$evento['city']?></h5>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	<?php endif;?>
<?php endif; ?>