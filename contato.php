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

       <div class="container">
       <div class="page-wrap">
  <h1>Polymer's Floating Label Input via CSS</h1>
  <form>
    <div class="styled-input">
      <input type="text" required />
      <label>Name</label>
      <span></span>
    </div>
    <div class="styled-input">
      <input type="email" required />
      <label>Email</label>
      <span></span>
    </div>
    <div class="styled-input">
      <input type="tel" required />
      <label>Phone</label>
      <span></span>
    </div>
    <div class="styled-input wide">
      <textarea required></textarea>
      <label>Message</label>
      <span></span>
    </div>
  </form>
</div>

       </div>       
       <?php include 'footer.php'; ?>

	</body>
</html>