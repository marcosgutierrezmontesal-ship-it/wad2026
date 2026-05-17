<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
    <?php
    $minombre = $_GET["nombre"];

$servidor = "localhost";
$usuario = "root";
$pass = "";

$conexion = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexion");

mysqli_select_db($conexion,"usuarios");

$insertar = "INSERT clientes (nombre) VALUES ('$minombre')";

mysqli_query($conexion,$insertar);
    ?>
</body>
</html>