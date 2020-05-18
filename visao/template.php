<html>
	<head>
		<title>Show da Física</title>
		<base href="<?= URL_BASE ?>">
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-png" href="img/ausronauta.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="publico/css/atomo.css">
		<link rel="stylesheet" href="publico/css/index.css">
		<!--
		<link rel="stylesheet" href="publico/css/sobre.css">
		<link rel="stylesheet" href="publico/css/contato.css">
		<link rel="stylesheet" href="publico/css/galeria.css">
	-->
		<link rel="stylesheet" href="publico/css/template.css">
		<link rel="stylesheet" href="publico/css/responsivo.css">
		<!--
		<link rel="stylesheet" href="publico/css/bootstrap.min.css">
		-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	</head>

	<body>
		<?php include 'cabecalho.php';?>

		<?php alertComponentRender(); ?>
		
		<main class="container">
			<?php require $viewFilePath; ?>
		</main>

		<?php include 'rodape.php';?>
	</body>
</html>