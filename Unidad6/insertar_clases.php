<?php
$unidad=$_POST['unidad'];
$fecha=$_POST['fecha'];

include("conexion.php");
mysqli_query($conectar, "INSERT INTO clases VALUES (DEFAULT, '$unidad', '$fecha')");


header("Location: unidad1.php?ok")
?>