
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Aritmeticas-logicas</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form">
        <input type="text" name="nombre" placeholder="Ingrese su Nombre">
        <br>
        <input type="text" name="apellido" placeholder="Su apellido">
        <br>
        <input type="number" name="valorA" placeholder="Ingrese Importe" value="0">
        <br>
        <input type="number" name="valorB" placeholder="Ingrese Importe" value="0">
        <br>
        <input type="submit" value="Subir">

        <input type="submit" name="btnBoton" value="enviar">
        <input type="submit" name="btnBoton" value="Borrar">
        <input type="submit" name="btnBoton" value="Ver">
    </form>

</body>
</html>

<?php
# cuando se carga la pagina por primera vez da error porque no esta definido el array con las key del formulario
#$nombre = $_POST['nombre'];

echo "hola mundo";

# si hay un envio, entonces levanto los datos del formulario y los guardo en variables
    if($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        $concat = "Usuario : " . $nombre . " " . $apellido;
        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $multiplicacion = $valorA * $valorB;
        $division = $valorA / $valorB;
        
        echo $concat . "<br>";
        echo "Suma : " . $suma . "<br>";
        echo "Resta : " . $resta . "<br>";
        echo "Multiplicacion : " . $multiplicacion . "<br>";
        echo "Division : " . $division . "<br>";

        if($valorA >= $valorB) {
            echo "El valor A es mayor o igual que el valor B" . "<br>";
        } else {
            echo "El valor A es menor que el valor B" . "<br>";
        }

        if($valorA == $valorB) {
            echo "El valor A es igual que el valor B" . "<br>";
        } else {
            echo "El valor A es diferente que el valor B". "<br>"; # !=
        }

        if ($valorA != $valorB  && $valorA > $valorB) { # && o se puede usar and
            echo "El valor A es mayor que el valor B y diferente tambien". "<br>";
        } else {
            echo "El valor A es igual que el valor B". "<br>"; # el or es || 
        }



    }

    if($_POST){

       # key => value   btnBoton => value 
        $boton = $_POST['btnBoton'];
        
        switch($boton){
            case 'enviar':
                echo "Envia";
                break;
            case 'Borrar':
                echo "borra";
                break;
            case 'Ver':
                echo "Ver";
                break;
            default:
                echo "No selecciono nada";
                break;
        }


    }

?>