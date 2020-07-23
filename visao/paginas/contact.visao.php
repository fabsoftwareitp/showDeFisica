<h1 class="title-form">Contato</h1>

<form action="" method="POST">
	<div class="normal">
		<input type="text" name="nome" id="form-name" required>
		<label for="form-name">Nome</label>
	</div>

	<div class="normal">
		<input type="email" name="email" id="form-email" required>
		<label for="form-email">Email</label>
	</div>

	<div class="data-form">
		<h3>Tipo de interesse</h3>

		<div class="radio-form">
			<input type="radio" name="interesse" value="Show" id="first" checked>
			<label for="first" id="first">Show</label>

			<input type="radio" name="interesse" value="Ambos" id="second">
			<label for="second" id="second">Ambos</label>

			<input type="radio" name="interesse" value="Patrocinio" id="last">
			<label for="last" id="last">Patrocínio</label>
		</div>	
	</div>

	<div class="txt-area">
		<textarea name="mensagem" id="msg" required></textarea>
		<label for="msg">Mensagem</label>
	</div>

	<div class="link">
		<button type="reset">Limpar</button>
		<button id="sub" type="submit">Enviar</button>
	</div>
</form>