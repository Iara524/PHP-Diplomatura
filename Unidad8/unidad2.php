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
		<aside>
		<?php  
		include('calculo_fecha.php');
		?>
		</aside>
		<h2>Ingrese una fecha</h2>
		<form action="unidad2.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Día</label>
      <input type="number"  name="dia" class="form-control is-valid" id="validationServer01" placeholder="dia" value="Día" min="1" max="31" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Mes</label>
      <input type="number"  name="mes" class="form-control is-valid"  placeholder="mes" value="Mes" min="1" max="12" required>
      
	  <div class="col-md-4 mb-3">
      <label for="validationServer02">Año</label>
      <input class="p-2" type="number" name="anio" class="form-control is-valid" placeholder="año" value="Año" min="2010" max="2030" required>
    </div>
  </div>
  <button class="btn btn-primary mt-1 mb-2" type="submit">Calcular</button>
</form>
	</section>
	<section>
</section>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>