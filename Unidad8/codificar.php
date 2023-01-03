<?php
$email = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT, array('cost'=>5));

include('conexion.php');

mysqli_query($conectar, "INSERT INTO usuarios VALUES ('$email','$contrasena')");

header("location: unidad8.php?Ok");
?>

