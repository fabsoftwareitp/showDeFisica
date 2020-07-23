<html>
	<head>
		<title>Show de Física</title>
		<base href="<?= URL_BASE ?>">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-png" href="publico/img/elements/ausronauta.png">

		<link rel="stylesheet" href="publico/style/index.css">
		<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
	</head>

	<body>

		<?php include 'cabecalho.php';?>

		<?php alertComponentRender(); ?>

		<main class="container">
			<?php require $viewFilePath; ?>
		</main>

		<?php include 'rodape.php';?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</body>
</html>