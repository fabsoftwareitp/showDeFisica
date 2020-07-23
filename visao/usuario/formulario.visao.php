<form action="<?=@$acao?>" method="POST">
	<h1>Usuário</h1>

	<div class="div-org">
		<div class="div-input w2">
			<input type="text" name="nome" id="nome" value="<?=@$usuario['name_user']?>" required>
			<label for="nome">Nome</label>
		</div>
		
		<div class="div-input w2">
			<input type="text" name="email" id="email" value="<?=@$usuario['email_user']?>" required>
			<label for="email">Email</label>
		</div>
	</div>

	<div class="div-org">
		<div class="div-input w2">
			<input type="password" name="senha" id="pass" value="<?=@$usuario['password_user']?>" required>
			<label for="pass">Senha</label>
		</div>

		<div class="div-input w2">
			<input type="password" name="conf-senha" id="conf-pass" required>
			<label for="conf-pass">Confirme sua senha</label>
		</div>
	</div>

	<div class="form-navigation">
		<a href="./usuario/">Cancelar</a>
		<button type="reset">Limpar</button>
		<button type="submit">Concluir</button>
	</div>
</form>