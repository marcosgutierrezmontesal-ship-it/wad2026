<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php  
    //Obtener y modificar la zona horaria

echo " Zona horaria" . date_default_timezone_get();
echo "<br>";

date_default_timezone_set("America/Los_Angeles");
echo " Zona horaria" . date_default_timezone_get();
echo "<br>";
    ?>

</body>
</html>