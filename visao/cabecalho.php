<div class="header">
	<a href=".">
		<img src="publico/img/elements/LogoShowDeFisica.png" alt="">
	</a>
	<input type="checkbox" name="" id="check">
	<div class="links-menu">
		<a class="nav-link" href=".">Início</a>
		<a class="nav-link" href="pages/about">Sobre</a>
		<a class="nav-link" href="agenda/">Agenda</a>
		<a class="nav-link" href="gallery/">Galeria</a>
		<a class="nav-link" href="pages/contact">Contato</a>
		<?php if (isset($_SESSION["acesso"])) :?>
			<a class="nav-link" href='login/logout'>Logout</a>
			<a class="nav-link" href='pages/dashboard'>Dashboard</a>
		<?php else:?>
			<a class="nav-link" href='login/'>Login</a>
		<?php endif;?>
	</div>
	<label for="check">Menu</label>
</div>