<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Listado de Clases</title>
</head>
<body>
    <section>
        <?php
            include("conexion.php");
            $clases = mysqli_query($conectar, "SELECT * FROM clases");
            while ($listar_clases = mysqli_fetch_assoc($clases)) {
        ?>
        <div>
            <h4> Clases </h4>
           <p>Unidad: <?php echo $listar_clases['unidad']?></p> 
        <p>Fecha: <?php echo $listar_clases['fecha']?></p>
        
        </div>
        <?php } ?>
    </section>
</body>
</html>