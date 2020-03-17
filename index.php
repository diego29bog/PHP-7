<?php 
    echo "<p>Hola Mundo PHP</p>";
    $integer=1;
    $float=1.5;
    $isTrue= false;
    $arraycolores= array("azul","morado","negro") ;
    $string="hola";

    echo $integer;
    echo $float;
    if($isTrue){
    echo $arraycolores[0];
    echo $string;
    echo "verdadero";
    }
    function variablesglobales(){
    	$local="soy la variable local";
    	echo $GLOBALS["global"];
    	echo $local;
    }
    $global="soy la variable global";
    variablesglobales();
 ?>