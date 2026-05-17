<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
        <?php
        $minombre = $_GET["nombre"];
        $modificar = $_GET["seleccionar"];
$host = "localhost";
$usuario = "root";
$pass = "";

$conexion = mysqli_connect($servidor,$usuario,$pass) or die("Error de conexion");

mysqli_select_db($conexion,"usuarios");

$sql = "UPDATE clientes SET nombre = '$minombre' WHERE nombre = '$modificar'";
mysqli_query($conexion,$sql);
?>
</body>
</html>