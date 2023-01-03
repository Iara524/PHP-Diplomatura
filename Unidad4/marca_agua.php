<?php 
$image = "imagenes/mariposa.jpg";
$marca_agua = "imagenes/marca.png";

$img = imagecreatefrompng($marca_agua);
$ext = substr($image, -3);
$ext = strtolower($ext);

switch ($ext) {
    case 'gif':
        $img2 = imagecreatefromgif($image);
        break;
    case 'jpg':
        $img2 = imagecreatefromjpeg($image);
        break;
    case 'png':
        $img2 = imagecreatefrompng($image);
        break;
}
imagecopy($img2, $img, (imagesx($img2)/3), (imagesy($img2)/3), (imagesx($img)/8), (imagesy($img)/8), imagesx($img), imagesy($img));

header("Content-type: image/jpeg");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);
?>