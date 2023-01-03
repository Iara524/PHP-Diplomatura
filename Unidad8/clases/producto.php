<?php
	class Producto 	{
		private $basedatos;
		public $codigo;
		public $producto;
		public $descripcion;
		public $precio;

		
		function __construct ($base){
		$this->basedatos = $base;
		}
		
		function introducir_compra($codigo,$producto, $descripcion, $precio) {
            $respuesta = $this->basedatos->ejecutarConsultas("INSERT INTO compras VALUES ('$codigo','$producto','$descripcion','$precio')");
            return $respuesta;
        }
		

		function listar_productos() {
			$respuesta = $this->basedatos->ejecutarConsultas("SELECT * FROM productos ORDER BY producto");
			return $respuesta;
		}

		function seleccionUnProducto($id) {
		$respuesta = $this->basedatos->ejecutarConsultas("SELECT * FROM productos WHERE codigo=$id");
		return $respuesta;
	}

	}
?>