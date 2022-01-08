<!DOCTYPE html>
<html lang="es">
<head>
  <title>Resultado</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="box-container">
		<div class="box-wrapper">

      <!-- Title -->
      <span class="form-title">
        Datos de registro
      </span>

      <!-- PHP -->
      <?php
        echo "Nombre     : "; echo $_POST['first-name']; echo "<br/>";
        echo "Apellido   : "; echo $_POST['last-name']; echo "<br/>";
        echo "E-mail    : "; echo $_POST['e-mail']; echo "<br/>";
        echo "contraseña : "; echo $_POST['pw']; echo "<br/>";
      ?>

		</div>
	</div>
</body>
</html>