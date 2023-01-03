<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	
</div>
	<nav>
		<?php include("botonera.php"); ?>
	
	<?php 		
		include ("listas.php");

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);

		$prod = new Producto($base);
		$mostrar_prod = $prod->listar_productos();


		$carrito = new Carrito($base);
		$mostrar_carrito = $carrito->listarProductos();
	
		?>
	</nav>
	</header>
	<section>
		<h2>Productos</h2>
		<table>
			<th>Código</th>
			<th>Producto</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Agregar</th>

			<?php 
			 for($i=0; $i<count($mostrar_prod); $i++) { ?>
				<tr>
					<td><?php echo $mostrar_prod[$i]['codigo']?> </td>
					<td><?php echo $mostrar_prod[$i]['producto']?> </td>
					<td><?php echo $mostrar_prod[$i]['descripcion']?> </td>
					<td><?php echo $mostrar_prod[$i]['precio']?> </td>
					<td><a href='alta_prod.php?OK=<?php echo $mostrar_prod[$i]['codigo']?>'><button>Comprar</button></a></td>
				</tr>
			<?php } ?>
		</table>
	</section>
	<aside>
		<h3>Compras:</h3>
			<?php if($mostrar_carrito){
			for($i=0; $i<count($mostrar_carrito); $i++) { ?>
					<p><strong>Producto:</strong><?php echo $mostrar_carrito[$i]['producto']?></p>
					<p><strong>Descripcion:</strong><?php echo $mostrar_carrito[$i]['descripcion']?></p>
					<p><strong>Precio:</strong>$<?php echo $mostrar_carrito[$i]['precio']?></p>
					<a href="eliminar_prod.php?SI=<?php echo $mostrar_carrito[$i]['codigo']?>"><button>Eliminar</button></a>
			<?php }} ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>

</body>
</html>