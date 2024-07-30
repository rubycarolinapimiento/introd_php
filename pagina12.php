<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en php</title>
</head>
<body>
    <h1>Funciones en php</h1>
    <?php
    /* una funcion es un bloqueo de codigo que intrduccimos en nuestra pagina y que puede ser utilizado 
    a largo de todo nuestro codigo de php.. La principal ventajas es que nos permite ahorrar codigo */

    /* para definir las funciones se emplea la sentencia function. Las funciones pueden recibir tantos 
    argumentos como sean necesarios, separandolas por comas */

    echo "<h1>";
    function suma($x, $y);
    {
        $z = $x + $y:
        return $z;
    }
   $resultado = suma(5,12);
   echo "</br";
   echo $resultado;
   echo "</h1>";

    ?>
</body>
</html>