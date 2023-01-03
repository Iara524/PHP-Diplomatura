<?php
$email = $_POST['correo'];
$contrasena = $_POST['contrasena'];

include("conexion.php");

$consulta = mysqli_query($conectar, "SELECT email, contrasena FROM usuarios WHERE email = '$email' ");

if(mysqli_num_rows($consulta)==0) {
    header("Location: ingresar.php?error_us");
} else {
    $array_bd = mysqli_fetch_assoc($consulta);
    $verificar_pass = password_verify($contrasena, $array_bd['contrasena']);

    if($verificar_pass){
        header("Location: ingresar.php?SI");
    } else {
        header("Location: ingresar.php?error");
    }
}
?>