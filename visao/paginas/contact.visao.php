<form action="" method="POST">
	<h1>Contato</h1>

	<div class="div-org">
		<div class="div-input w2">
			<input type="text" name="nome" id="form-name" required>
			<label for="form-name">Nome</label>
		</div>

		<div class="div-input w2">
			<input type="email" name="email" id="form-email" required>
			<label for="form-email">Email</label>
		</div>
	</div>

	<div class="div-org">
		<h3>Conte-nos seu Interesse:</h3>

		<div class="radio">
			<input type="radio" name="interesse" value="Show" id="first" checked>
			<label for="first" id="first">Quero um Show</label>

			<input type="radio" name="interesse" value="Ambos" id="second">
			<label for="second" id="second">Ambos</label>

			<input type="radio" name="interesse" value="Patrocinio" id="last">
			<label for="last" id="last">Quero patrocinar</label>
		</div>
	</div>

	<div class="div-org">
		<div class="div-input w1">
			<textarea name="mensagem" id="msg" required></textarea>
			<label for="msg">Mensagem</label>
		</div>
	</div>

	<div class="form-navigation">
		<button type="reset">Limpar</button>
		<button type="submit">Enviar</button>
	</div>
</form>