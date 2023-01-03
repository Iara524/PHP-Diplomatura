<?php
session_start();
$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$consulta = $_POST['query'];
$codigo = $_POST['codigo'];


if($codigo == $_SESSION['captcha']){
    include("conexion.php");
    mysqli_query($conectar, "INSERT INTO consultas VALUES ('$nombre', '$apellido', '$email', '$consulta')");
    echo "Los datos se cargaron correctamente";
    
} else {
    header("Location: unidad5.php?fail");
       }
?>
