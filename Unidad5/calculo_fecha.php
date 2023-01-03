<?php
if($_POST){
$dia=$_POST['dia'];
$mes=$_POST['mes'];
$ano=$_POST['anio'];

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_hoy = date('d-m-Y', time());

$calcular_fecha = strtotime($dia.'-'.$mes.'-'.$ano)-strtotime($fecha_hoy);




    if($calcular_fecha >= 0){
        echo '<p> Faltan '.$calcular_fecha / (86400).' días para la fecha elegida.</p>';}
        if($calcular_fecha <= 0){
            echo '<p>ERROR!Ya pasaron '.$calcular_fecha / (-86400).' días desde la fecha elegida.</p>';}
        }
?>