<?php session_start(); ?>

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
		<h2>Captcha</h2>
		<?php
		function contenido_captcha() {
         $pattern = "¡590223480AfYggO#abcdefghyjklmnñopqrst";
		 $clave = '';
         for($i=0; $i < 8; $i++) {
			$clave .= $pattern [rand(0,39)];
	      }
           return $clave;
		}
		$_SESSION['captcha'] = contenido_captcha();
		?>
		</section>
		<section>
		<form action="cargar.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Nombre</label>
      <input type="text" name="nombre" class="form-control is-valid" id="validationServer01" placeholder="Nombre" required>
      <div class="valid-feedback">
        Completar!
      </div>
    </div>
	<div class="col-md-4 mb-3">
      <label for="validationServer01">Apellido</label>
      <input type="text" name="apellido" class="form-control is-valid" id="validationServer01" placeholder="Apellido" required>
      <div class="valid-feedback">
        Completar!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Email</label>
      <input type="email" name="email" class="form-control is-valid" id="validationServer02" placeholder="Email" required>
      <div class="valid-feedback">
        Completar!
      </div>
    </div>
	<div class="col-md-4 mb-3">
      <label for="validationServer01">Consulta</label>
      <textarea type="text" name="query" class="form-control is-valid" id="validationServer01" placeholder="Consulta"></textarea>
      <div class="valid-feedback">
        Completar!
      </div> 
    </div>
  </div>
  <img src="imagen_captcha.php" alt="captcha">
  <input type="text" name="codigo" placeholder="Captcha">
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
<?php
        if(isset($_GET["fail"])) { 
           echo "<h3>ERROR!Codigo incorrecto</h3>";
        }
        ?> 
	</section>
	<section>
		</section>
	<aside>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>