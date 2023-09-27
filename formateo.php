<?php
    $texto = $_POST['texto'];
    $color = $_POST['color'];
    $fuente = $_POST['fuente'];
    $tamano = $_POST['tamano'];

    if ($_POST['guardar'] == 'si') {
        
        setcookie('textoGuardado', $texto, time() + 3600, '/'); //  1 hora
    }
    
    echo '<div style="color:';
    echo $color;
    echo '; font-family:';
    echo $fuente;
    echo '; font-size:';
    echo $tamano;
    echo 'px;">';
    echo $texto;
    echo '</div>';


    ?>

<?php
// Incluir el pie de página
include 'footer.php';
?>