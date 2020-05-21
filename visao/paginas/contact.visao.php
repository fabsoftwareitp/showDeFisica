<div class="contato">
	<h1>Contato</h1>

	<form action="pages/contact" method="POST">
		<div class="form-content">
			<div class="content-input">
				<label for="form-name">Nome</label>
				<input id="form-name" name="nome" type="nome" required />
			</div>

			<div class="content-input">
				<label for="form-email">Email</label>
				<input id="form-email" name="email" type="email" required />
			</div>
		</div>

		<div class="form-content-interesse">
			<h3>Conte-nos seu interesse:</h3>

			<div class="interesse">
				<input type="radio" name="interesse" value="S" id="show" checked>
				<label for="show" id="show">Desejo um Show</label>
				<input type="radio" name="interesse" value="A" id="ambo">
				<label for="ambo" id="ambo">Ambos</label>
				<input type="radio" name="interesse" value="P" id="patr">
				<label for="patr" id="patr">Desejo patrocinar</label>
			</div>
		</div>

		<div class="form-content-mensagem">
			<label for="msg">Texto</label>
			<textarea id="msg" name="mensagem" required></textarea>
		</div>

		<button type="submit">Enviar</button>
	</form>
</div>