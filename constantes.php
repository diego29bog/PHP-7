<?php
//constantes
$variables;
const CONSTANTE='esta es una constante';
const NUMEROS= 1;
const COLORES=array('amarillo','azul','rojo');
echo CONSTANTE;
echo NUMEROS;
echo COLORES[2];
//define
define('CONSTANTE2',"Hola Mundo PHP");
echo CONSTANTE2;
define('COLORES2', array('negro','gris','azul'));
echo COLORES2[2];
echo PHP_INT_MIN;
echo PHP_FLOAT_MIN;
?>
