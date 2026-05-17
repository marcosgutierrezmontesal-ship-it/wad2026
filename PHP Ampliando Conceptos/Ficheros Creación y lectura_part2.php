<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>

    <?php 
    $miarchivo = fopen("archivo1.txt","r+");
if($miarchivo == false){
        echo "error al abrir el archivo1.txt";
}
else{
        $contenido = fread($miarchivo, filesize("archivo1.txt"));
        echo $contenido;
}

    ?>

</body>
</html>