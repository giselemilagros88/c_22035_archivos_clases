<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA INCLUIDE</title>
</head>
<body>
        <?php
            #esto me permite traer codigo de otro archivo
            #si hay errores advierte pero sigue con lo proximo 
            #en caso de no existir el archivo o si adentro el codigo tiene errores 
            include_once 'include.php';
            include_once 'include.php';
            echo "<br> hola mundo estoy debajo del error!";
           
            #funciona similar pero la diferencia es que no sigue si pasa algo de lo mencionado
            # require 'apis/consumir_api.php';

        ?>
</body>
</html>

