<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php
    //Capturar las variables que se ha propagada
    session_start();

if(isset($_SESSION['iniciada']) == true){

        session_unset();
        session_destroy();

        if(isset($_SESSION['nombre'])){
                echo "Nombre: ". $_SESSION['nombre'];
                echo "<br>";
        }
        else{
                echo "La variable de sesión nombre no está definida";
        }
}
else{
        echo "No se ha definido la sesión";
}
        ?>

</body>
</html>