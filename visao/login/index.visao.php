<form method="POST" action="<?=@$acao?>">

	<h1>Acesse o sistema</h1>

	<div class="div-input w2">
		<input id="login" type="text" name="email" required>
		<label for="login">Email:</label>
	</div>

	<div class="div-input w2">
		<input id="passwd" type="password" name="senha" required>
		<label for="passwd">Senha:</label>
	</div>

	<div class="form-navigation">
		<button type="reset">Limpar</button>
		<button type="submit">Acessar</button>
	</div>
		
</form>