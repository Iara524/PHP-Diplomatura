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
	<form action="insertar_clases.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Unidad</label>
      <input type="number" name="unidad" class="form-control is-valid" id="validationServer01" placeholder="Unidad" value="Mark" required>
      <div class="valid-feedback">
        Completar!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Fecha</label>
      <input type="date" name="fecha" class="form-control is-valid" id="validationServer02" placeholder="Fecha" value="Otto" required>
      <div class="valid-feedback">
        Completar!
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
<?php
        if(isset($_GET["ok"])) { 
           echo "<p>Agregado</p>";
        }
        ?> 

	</section>
	<aside>
		<div class="clases">
	<?php
		include('ver_clases.php');
		?>
	</div>
	</aside>
</div>
</section>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>