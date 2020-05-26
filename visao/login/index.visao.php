
<head>
<link rel="stylesheet" type="text/css" href="./publico/css/login/login.css">
<link rel="stylesheet" type="text/css" href="./publico/css/login/util.css">
</head>



<form method="POST" action="<?=@$acao?>">

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-avatar">
						<img src="./publico/img/icon/astro_ico.svg" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input  id="login" class="input100" type="text" name="email" required>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input id="passwd" class="input100" type="password" name="senha" required>
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Acessar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
    <!-- aaaaaaaaaaaaaaaa -->

</form>