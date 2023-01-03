<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Registrarse</h2>
	<form action="codificar.php" method="POST">
	<div class="col-md-4 mb-3">
      <label for="validationServer02">Email</label>
      <input type="email" name="correo" class="form-control is-valid" id="validationServer02" placeholder="Email" maxlength="50" required>
      <div class="valid-feedback">
        Completar!
      </div>
    </div>
	<div class="col-md-4 mb-3">
      <label for="validationServer01">Contraseña</label>
      <input type="password" name="contrasena" class="form-control is-valid" id="validationServer01" placeholder="Contraseña" maxlength="10" required>
      <div class="valid-feedback">
        Completar!
      </div>
    </div>
	<button class="btn btn-primary" type="submit">Enviar</button>
	<a href="ingresar.php">Ingresar</a>
	<?php
        if(isset($_GET["Ok"])) { 
           echo "<p>Usuario cargado</p>";
        }
        ?> 
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>