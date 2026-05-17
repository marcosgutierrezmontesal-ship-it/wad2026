<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
    <form name="miformu" id="miformu" method="get" action="actualizar.php">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">

        </p>
        <?php
        $host = "localhost";
        $usuario = "root";
        $pass = "";

$conexion = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexion");

mysqli_select_db($conexion,"usuarios");

$consultar = "SELECT nombre FROM clientes";

$registros = mysqli_query($conexion, $consultar);
echo "<label for='seleccionar'> Elige un nomrbe: </label>";
echo "<select name='seleccionar' id='seleccionar'>";
while($registro=mysqli_fetch_row($registros)){

        echo "<option value='$registro[0]'>".$registro[0] ."</option>";
}
echo "</select>";
        ?>
        <input type="submit" value="Actualizar">

</form>
</body>
</html>