<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
        <?php
        class PrimeraClase{
            public $nombre = "Marcos";
            public function mostrarNombre(){
                echo $this->nombre;
                        }
        }
        $instacia = new PrimeraClase();
        echo $instacia->nombre;
        echo "<br>";
        $instacia->mostrarNombre();
?>
</body>
</html>