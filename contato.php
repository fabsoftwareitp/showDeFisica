<!doctype html>
<html lang="en">
	<head>
		<title>Show da Física</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-png" href="img/ausronauta.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/mobile.css">
        <link rel="stylesheet" href="css/sobre.css">
        <link rel="stylesheet" href="css/contato.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
       

	<body>
    <?php include 'menu.php'; ?>

       <div class="container border border-dark">

            <div class="page-wrap">
               
                    <h3>Guia para contato</h3>
                
                <form>
                    <div class="styled-input col-md-6">
                    <input type="nome" required />
                    <label>Nome</label>
                    <span></span>
                    </div>
                    <div class="styled-input col-md-6">
                    <input type="email" required />
                    <label>Email</label>
                    <span></span>
                    </div>

                    <div class="styled-input col-md-12">
                    <input type="contato" required />
                    <label>Tipo de contato</label>
                    <span></span>
                    </div>

                    <div class="styled-input wide">
                    <textarea required></textarea>
                    <label>Texto</label>
                    <span></span>
                    </div>

                    <button type="button" class="btn btn-danger btn-block">Enviar</button>
                </form>
            </div>
        </div>
     
       <?php include 'footer.php'; ?>

	</body>
</html>