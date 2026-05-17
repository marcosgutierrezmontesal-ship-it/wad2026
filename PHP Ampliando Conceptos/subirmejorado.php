<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
    <?php
    $directoriosubida = "uploads/";
$max_file_size="51200";
$extensionesvalidas = array("jpg","png","gif");

if(isset($_POST["submit"]) && isset($_FILES['imagen'])){

        $errores = 0;
        $nombrearchivo = $_FILES['imagen']['name'];
        $filesize = $_FILES['imagen']['size'];
        $directoriotemp = $_FILES['imagen']['tmp_name'];
        $tipoarchivo = $_FILES['imagen']['type'];
        $arrayArchivo = pathinfo($nombrearchivo);
        //var_dump($arrayArchivo);
        $extension = $arrayArchivo['extension'];

        if(!in_array($extension,$extensionesvalidas)){
                echo " Extensión no válida";
                $errores = 1;
        }

        if($filesize > $max_file_size){
        echo " La imagen supera el tamaño máximo";
        $errores = 1;
}

    if($errores == 0){
        $nombrecompleto = $directoriosubida.$nombrearchivo;
        move_uploaded_file($directoriotemp,$nombrecompleto);
        echo "Fichero subido correctamente";
}
}
?>
</body>
</html>