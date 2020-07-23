<div class="list">
	<?php
		if (count($usuarios) == 0){ $msg = "Vazio por aqui"; }
		elseif (count($usuarios) == 1){ $msg = count($usuarios)." Usuário registrado";}
		else { $msg = count($usuarios)." Usuários registrados";}
	?>
	<h1><?=$msg?></h1>

	<a class="link-add" href="./usuario/adicionar">Adicionar usuário</a>

	<div class="title-list">
		<div class="list-info">
			<p class="id">ID</p>
			<p class="name">Nome</p>
		</div>

		<div class="list-control">
			<p>Config</p>
		</div>
	</div>

	<?php foreach ($usuarios as $usuario): ?>
		<div class="list-content">
			<div class="list-info">
				<p class="id"><?=$usuario['id_user']?></p>
				<p class="name"><?=$usuario['name_user']?></p>
			</div>

			<div class="list-control">
				<!-- <input type="radio" onclick="showList()" id="usuario_check" hidden> -->
				<!-- <label for="usuario_check"><img src="./publico/img/icon/more.svg" alt=""></label> -->

				<!-- <div> -->
					<a href="./usuario/visualizar/<?=$usuario['id_user']?>">View</a>

					<!-- <a href="./usuario/editar/<?=$usuario['id_user']?>">Editar</a> -->
					<!-- <a href="./usuario/deletar/<?=$usuario['id_user']?>">Deletar</a> -->
				<!-- </div> -->
			</div>
		</div>
	<?php endforeach; ?>
</div>