<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
</head>
 
<body>
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<aside>
	<?php
	if(imagetypes () & IMG_GIF){
		echo "<p>El tipo GIF esta disponible</p>";
	} else {
		echo "<p> Ese formato no esta disponible</p>";
	}

	if(imagetypes () & IMG_PNG){
		echo "<p> El tipo PNG esta disponible</p>";
	} else {
		echo "<p> Ese formato PNG no esta disponible</p>";
	}
	if(imagetypes () & IMG_JPEG){ 
		echo "<p> El tipo JPEG esta disponible</p>";
	} else {
		echo "<p> Ese formato JPEG no esta disponible</p>";
	} 
	?>
  </aside>
	<section>
	<h2>Imágenes con PHP</h2>
	<img src="marca_agua.php">

	<?php
	//include("thumbnail.php");?>
	</section>
	<section>
	<a href="imagenes/unidad4.jpg" data-lightbox="image-1"><img src="imagenes/thumb.jpg"></a>
	
    </section>
	
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/lightbo-pluz-jquery.min.js"></script>
</body>
</html>