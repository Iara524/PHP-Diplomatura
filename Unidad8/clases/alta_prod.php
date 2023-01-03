<?php  
	include("listas.php");
	

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
		$prod = new Producto($base);

        $getProd = $prod->seleccionUnProducto($_GET['OK']);

        $prod->introducir_compra($getProd[0]['codigo']$getProd[0]['producto'],$getProd[0]['descripcion'],$getProd[0]['precio']);

        header("Location:unidad7.php")
?>