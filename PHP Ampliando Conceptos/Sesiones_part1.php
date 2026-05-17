<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php
    //Sesiones

session_id("22");
echo session_id();

echo session_name();
session_start();

$_SESSION['iniciada']= true;
echo "<br>";
$_SESSION['nombre'] = "Luisja";
echo "<br>";

var_dump($_SESSION);
echo "<br>";

echo "Nombre " . $_SESSION['nombre'];
echo "<br>";

unset($_SESSION['nombre']);

if(isset($_SESSION['nombre']) == false){
        echo "Nombre no definido";
}

session_destroy();
    ?>

</body>
</html>