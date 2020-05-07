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

       <div class="container-fluid corpo">
            <div class="row">
                <div class="m-auto">
                <center>
                    <h3>Nos Patrocine</h3>
                    <h4>E ajude a tornar nosso projeto real</h4>
                </center>
                <div class="page-wrap">               
                <form>

                    <div class="styled-input col-md-6">
                    <input type="nome" required />
                    <label>Nome.</label>
                    <span></span>
                    </div>

                    <div class="styled-input col-md-6">
                    <input type="email" required />
                    <label>Email para Contato.</label>
                    <span></span>
                    </div>

                    <div class="styled-input wide">
                    <textarea required></textarea>
                    <label>Texto.</label>
                    <span></span>
                    </div>

                    <button type="button" class="btn btn-danger btn-block b-ap">Enviar</button>

                </form>
            </div>
                </div>
            </div>
       </div>

            
     
       <?php include 'footer.php'; ?>

	</body>
</html>