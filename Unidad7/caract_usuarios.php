<?php 
include ("clases/usuarios.php");
$usuario = new Usuarios('Zoe','Nuss','1999-05-08');
$usuario->imprime_caracteristicas();
?>