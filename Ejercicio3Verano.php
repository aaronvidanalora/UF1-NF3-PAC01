<?php
$dia = date("z"); // Obtener el día del año (0-365)

if ($dia >= 80 && $dia <= 171) {
    echo "¡Buen primavera!";
}

if ($dia >= 172 && $dia <= 262) {
    echo "¡Buen verano!";
}

if ($dia >= 263 && $dia <= 354) {
    echo "¡Buen otoño!";
}

if (($dia >= 355 && $dia <= 365) || ($dia >= 0 && $dia <= 79)) {
    echo "¡Buen invierno!";
}

// Incluir el pie de página
include 'footer.php';
?>
