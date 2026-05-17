<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP: Ampliando Conceptos</title>
</head>
<body>
        <?php
        class Alumno{

        private $nombre = null;
        private $apellidos = null;

        function getNombre() {
                return $this->nombre;
        }
        function getApellidos(){
                return $this->apellidos;
        }

        function setNombre($nombre){
                $this->nombre = $nombre;
        }
        function setApellidos($apellidos){
                $this->apellidos = $apellidos;
        }

        function calcularLetras($nombre){
            function calcularLetras($nombre){
                return strlen($this->nombre);
        }
        }
        $alumno1 = new Alumno();
        $alumno1->setNombre("marcos");
        $alumno1->setApellidos("Gutierrez");

        $nombrealumno1 = $alumno1->getNombre();
        echo $nombrealumno1;
        echo "<br>";

        $apellidosalumno1 = $alumno1->getApellidos();
        echo $apellidosalumno1;
        echo "<br>";

        $letras = $alumno1->calcularLetras($nombrealumno1);
        echo $letras;



?>
</body>
</html>