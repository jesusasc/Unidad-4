<?php

echo "<h1 >Tipo de variables y constantes</h1>";

echo "<h1 style='text-align:center'>Variables</h1>";

/**Los tipos de variables básicos son los siguientes:
lógicas o booleanas (boolean)
enteros (integer)
decimales (float)
cadenas (string)
matrices (arrays)
 */

echo "<h3>Variables lógicas (boolean). true (verdadero) o false (falso)</h3>";
/*
Las variables de tipo lógico sólo pueden tener el valor true (verdadero) o false (falso).
Se suelen utilizar en las estructuras de control.
*/

$autorizado = true;

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
    print "indicandó con la varibale true";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
}

$autorizado = false;

if ($autorizado == true) {
    print "<p>Usted está autorizado.</p>\n";
    print "indicandó con la varibale true";
}

if ($autorizado == false) {
    print "<p>Usted no está autorizado.</p>\n";
    print "indicandó con la varibale false";
}
echo "<h3>Variables enteras (integer)</h3>";
/*
Las variables de tipo entero pueden guardar números enteros (positivos o negativos).
*/
$lado = 14;
$area = $lado * $lado;

print "<p>Un cuadrado de lado $lado cm \ntiene un área de $area cm<sup>2</sup>.</p>\n";

echo "<h3>Variables decimales (float)</h3>";
/*
Las variables de tipo decimal (float) pueden guardar números decimales (positivos o negativos). 
Como en las calculadoras, el separador de la parte entera y la parte decimal es el punto (.),
 no la coma (,).
*/

$lado = 14.5;
$area = $lado * $lado;

print "<p>Un cuadrado de lado $lado cm \ntiene un área de $area cm<sup>2</sup>.</p>\n";

echo "<h3>Variables de cadenas (string)</h3>";
/*
Las variables de tipo cadena pueden guardar caracteres.

PHP no impone ningún límite al tamaño de las cadenas. Las cadenas pueden ser todo lo largas que permita la memoria del servidor.
*/

$saludo = "Hola, Don Pepito";
print "<p>$saludo</p>\n";

$saludo[0] = "M";
print "<p>$saludo</p>\n";

$saludo[14] = "n";
print "<p>$saludo</p>\n";

echo "<h3>Matrices</h3>";
/*
Una matriz es un tipo de variable que permite almacenar simultáneamente varios datos diferentes, 
a los que se accede mediante un índice, numérico o de texto.
En inglés, las matrices se llaman arrays. A veces el término inglés array se traduce como arreglo.
*/
$nombres = ["Ana", "Bernardo", "Carmen"];

print "<p>$nombres[1]</p>\n";
print "<p>$nombres[0]</p>\n";

//*!Cobstantes 
echo "<h1 style='text-align:center'>Constantes</h1>";

echo "<h2>Definir constantes</h2>";
/*
Las constantes son elementos de PHP que guardan un valor fijo que no se puede modificar a lo largo del 
programa. Las constantes pueden ser definidas por el programa o estar predefinidas por el propio PHP
o por algún módulo. Los nombres de las constantes siguen las mismas reglas que los nombres de las variables,
pero sin el dólar ($) inicial. La costumbre es escribir los nombres de las constantes en mayúsculas.
*/

echo "<b>La función define(nombre_constante, valor_constante) permite definir constantes.</b>";
define("PI", 3.14);
print "<p>El valor de pi es " . PI . "</p>\n";

echo "<b>También se pueden definir constantes mediante la palabra reservada const.</b>";
const PI2 = 3.14;
print "<p>El valor de pi es " . PI2 . "</p>\n";

echo "<h2>Lista completa de constantes predefinidas</h2>";
/*
El número de constantes predefinidas depende de los módulos cargados en php.ini.
La función get_defined_constants() devuelve las constantes predefinidas en el servidor que estemos utilizando:
*/

print "<pre>";
print_r(get_defined_constants());
print "</pre>\n";

echo "<h2>PHP_INT_MAX</h2>";
/*
PHP_INT_MAX es el valor del mayor entero que se puede guardar en una variable de tipo entero.
*/

$maximo = PHP_INT_MAX;
print "<p>El mayor entero que se puede guardar \n";
print "en una variable entera es $maximo</p>\n";

?>