<h1 class="title-form">Acesse o sistema</h1>
<form method="POST" action="<?=@$acao?>">
	<div class="normal">
		<input id="login" type="text" name="email" required>
		<label for="login">Email</label>
	</div>
	<div class="normal">
		<input id="passwd" type="password" name="senha" required>
		<label for="passwd">Senha</label>
	</div>
	<div class="link">
		<button type="reset">Limpar</button>
		<button id="sub" type="submit">Acessar</button>
	</div>
</form>