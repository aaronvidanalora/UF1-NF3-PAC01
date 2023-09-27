<?php
session_start(); // Iniciar la sesión

if (isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++; // Sumamos cada vez que inicia sesion
} else {
    $_SESSION['visitas'] = 1; // Si no existe, inicializarla en 1
}

echo "Número de visitas: " . $_SESSION['visitas'];
?>