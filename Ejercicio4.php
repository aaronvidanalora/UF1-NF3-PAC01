<!DOCTYPE html>
<html>
<head>
<style>
    
</style>    
<title>Formateador de Texto</title>
</head>
<body>
    <h1>Formateo Aarón Vidaña</h1>
    <form action="formateo.php" method="post">
        <label for="texto">Pon el texto que quieras formatear:</label><br>
        <textarea id="texto" name="texto" rows="6" cols="100"></textarea><br>

        <label for="color">Color del Texto:</label>
        <input type="color" id="color" name="color"><br>
        
        <label for="fuente">Fuente:</label>
        <select id="fuente" name="fuente">
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Verdana">Verdana</option>
        </select><br>

        <label for="tamano">Tamaño del Texto:</label>
        <input type="number" id="tamano" name="tamano" min="10" max="48" step="2" value="14"><br>


        <!-- Opción para guardar en una cookie -->
        <label for="guardar">¿Deseas guardar la información?</label>
        <select id="guardar" name="guardar">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select><br>

        
        <input type="submit" value="Formatear">
    </form>
</body>
</html>



