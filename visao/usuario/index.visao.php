<div class="table">
	<h1>Listar usuários</h1>

	<a class="link-add" href="usuario/adicionar">Adicionar novo usuário</a>

	<div class="title-table">
		<div class="table-info">
			<p id="id">ID</p>
			<p>Nome</p>
			<p>Email</p>
		</div>
		<div class="table-control">
			<p>View</p>
			<p>Edit</p>
			<p>Delete</p>
		</div>
	</div>

	<?php foreach ($usuarios as $usuario): ?>
		<div class="table-content">
			<div class="table-info">
				<p id="id"><?=$usuario['id_user']?></p>
				<p><?=$usuario['name_user']?></p>
				<p><?=$usuario['email_user']?></p>
			</div>
			<div class="table-control">
				<p><a href="usuario/visualizar/<?=$usuario['id_user']?>"><img src="publico/img/icon/eye.svg"></a></p>
				<p><a href="usuario/editar/<?=$usuario['id_user']?>"><img src="publico/img/icon/edit.svg"></a></p>
				<p><a href="usuario/deletar/<?=$usuario['id_user']?>"><img src="publico/img/icon/delete.svg"></a></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>