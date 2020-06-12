<html>
	<head>
		<title>Show de Física</title>
		<base href="<?= URL_BASE ?>">
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-png" href="publico/img/elements/ausronauta.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="publico/css/index.css">
		<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	</head>

	<body>
	
		<?php include 'cabecalho.php';?>

		<?php alertComponentRender(); ?>

		<main class="container">
			<?php require $viewFilePath; ?>
		</main>

		<?php include 'rodape.php';?>

		<script>
    		$(document).ready(function(){
    			$('.slider').bxSlider();
    		});
		</script>

		<script src="publico/js/index.js"></script>
	</body>
</html>