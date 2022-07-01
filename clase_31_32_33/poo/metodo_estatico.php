<?php 


class unaClase{

    public static function unMetodo(){
        echo "hola soy un metodo estatico";
    }
}


$obj = new unaClase();
$obj-> unMetodo();

// llamado sin referencia, solo referenciando la clase, sin objeto.
unaClase::unMetodo();

?>