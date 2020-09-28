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
				<a href="./usuario/visualizar/<?=$usuario['id_user']?>"><p class="name"><?=$usuario['name_user']?></p></a>
		</div>

			<div class="list-control">
				<a href="./usuario/editar/<?=$usuario['id_user']?>">Editar</a>
				<a href="./usuario/deletar/<?=$usuario['id_user']?>">Deletar</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>