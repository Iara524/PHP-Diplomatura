<?php

class Carrito {
	private $basedatos;

	function __construct($base){
		$this->basedatos = $base;
	}

	function introducir_compra($codigo,$prod, $desc, $prec) {
		$respuesta = $this->basedatos->ejecutarConsultas("INSERT INTO compras VALUES ('$codigo','$producto', '$descripcion', $precio)");
		return $respuesta;
	}

	function listarProductos() {
		$respuesta = $this->basedatos->ejecutarConsultas("SELECT * FROM productos ORDER BY producto");
		return $respuesta;
	}

	function seleccionUnProducto($id) {
		$respuesta = $this->basedatos->ejecutarConsultas("SELECT* FROM compras WHERE codigo=$id");
		return $respuesta;
	}

	function eliminar_compra($id_compra){
		$respuesta = $this->basedatos->ejecutarConsultas("DELETE FROM compras WHERE codigo=$id_compra");
		return $respuesta;
	}

	function listar_compra($id, $prod, $descr, $prec){
		$respuesta = $this->basedatos->ejecutarConsultas("UPDATE compras SET producto ='$producto', descripcion = '$descripcion', precio = $precio  WHERE codigo=$id");
		return $respuesta;
	}

}

?>