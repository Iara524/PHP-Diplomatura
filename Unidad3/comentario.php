<?php
if ($_POST){
    $fullname_form = $_POST['nombreyapellido'];
    $correo_form = $_POST['email'];
    $comentarios_form = $_POST['comment'];
    
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fechaHoy = date("d-m-Y (H:i:s)", time());

    $txt = "<p>Enviaste tu comentario : </p>".$fechaHoy."<br>"."<p>Tu nombre y apellido son: </p>".$fullname_form."<br>"."<p>Tu correo es: </p>".$correo_form."<br>"."<p> Tu comentario es: </p>".$comentarios_form."<br>";
    $texto = fopen("comentarios.txt", "a+");

    fwrite($texto, $txt);
	fpassthru($texto);
	fclose($texto);

}
?>