<?php 
class Usuarios {

	private $nombre;
	private $apellido;
	private $fecha_nac;

	function __construct($nom,$ape,$f_n){
		$this->nombre=$nom;
		$this->apellido=$ape;
		$this->fecha_nac=$f_n;
	}

	public function calcular_edad(){
		date_default_timezone_set("America/Argentina/Buenos_Aires");

		$hoy = date("Y-m-d");
		$resta = strtotime($hoy)-strtotime($this->fecha_nac);
		$edad = intval($resta/31536000); 
		
		return $edad;

	}

	public function imprime_caracteristicas(){
		echo "<p>Nombre: ".$this->nombre."</p>";
		echo "<p>Apellido: ".$this->apellido."</p>";
		echo "<p>fecha_nac: ".$this-> fecha_nac."</p>";


		$edad_usuario = $this->calcular_edad();
		echo("<p> Edad: ".$edad_usuario." años</p>");
	}
}
?>