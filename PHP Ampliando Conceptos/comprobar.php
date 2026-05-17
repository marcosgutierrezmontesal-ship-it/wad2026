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

$consulta = "SELECT nombre FROM clientes";
$registros = mysqli_query($conexion,$consulta);
while($registros=mysqli_fetch_row($registros)){
echo "Nombre: ". $registros[0]. "<br>";
if( $registros[0] == "$minombre"){
    $encontrado = true;
}
else{
$encontrado = false;
}
}

if($encontrado){
    echo $minombre . "se encuentra en la base de datos";
}
else{
    echo $minombre . "no se encuentra en la base de datos";
}
?>
</body>
</html>