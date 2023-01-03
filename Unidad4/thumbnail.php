<?php
$src_img = imagecreatefromjpeg("imagenes/unidad4.jpg");
$alto = (imagesx($src_img)/3.4);
$ancho = (imagesy($src_img)/3.4);
$dst_img = imagecreatetruecolor($alto, $ancho);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($dst_img,$src_img,0,0,0,0, $ancho, $ancho, imagesx($src_img), imagesy($src_img)); 
imagejpeg($dst_img, "imagenes/thumb.jpg");
imagedestroy($dst_img);
?>
