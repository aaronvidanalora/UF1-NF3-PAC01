<?php
// Obtener la fecha actual
$fechaActual = date("Y-m-d");

// Calcular la fecha hace dos días
$fecha2Dias = date("Y-m-d", strtotime("-2 dias"));

// Calcular la fecha del próximo mes
$fechaProximoMes = date("Y-m-d", strtotime("+1 month"));

// Calcular los días restantes hasta el próximo mes
$diasMes = date("j", strtotime("primer dia del proximo mes")) - date("j");

// Calcular los meses restantes en el año actual
$mesesQuedan = 12 - date("n");

// Rellenar las frases
$frase0 = "Hoy es $fechaActual";
$frase1 = "Hace dos días fue $fecha2Dias";
$frase2 = "El próximo mes es $fechaProximoMes";
$frase3 = "Quedan $diasMes días para el próximo mes";
$frase4 = "Quedan $mesesQuedan meses de este año";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Frases sobre fechas</title>
</head>
<body>
    <p><?php echo $frase0; ?></p>
    <p><?php echo $frase1; ?></p>
    <p><?php echo $frase2; ?></p>
    <p><?php echo $frase3; ?></p>
    <p><?php echo $frase4; ?></p>
</body>
</html>
