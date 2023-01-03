<?php  	
include("listas.php");

		$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
		$carrito = new Carrito($base);

        $carrito->eliminar_compra($_GET['SI']);

        header("Location: unidad7.php")
?>