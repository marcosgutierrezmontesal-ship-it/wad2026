<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
    <?php
    $servidor = "localhost";
$usuario = "root";
$password = "";

$conexion = mysqli_connect($servidor,$usuario,$password);

if(!$conexion){
        echo "conexión fallida";
}
else{

        $sql = "CREATE DATABASE usuarios";
        if(mysqli_query($conexion,$sql)){
                echo " Base de datos creada con éxito";
        }
        else{
                echo "error: ". mysqli_error($conexion);
        }
        mysqli_select_db($conexion,"usuarios");
         
        $sql2 = "CREATE TABLE clientes(nombre VARCHAR(20))";
mysqli_query($conexion,$sql2);

}
?>
</body>
</html>