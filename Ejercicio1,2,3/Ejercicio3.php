<?php

echo "<h1 style='text-align:center'>operaciones básicas con tres números donde uno de ellos sea una constante.</h1>";
const num1 = 112.8;
$num2 = 2.4;
$num3 = 10;
echo "<h2>Suma Con constantes </h2>";
echo (num1 + $num2 + $num3);

echo "<h2>Multiplicacion Con constantes </h2>";
echo (num1 * $num2 * $num3);

echo "<h2>Resta Con constantes </h2>";
echo (num1 - $num2 - $num3);

echo "<h2>Divicion Con constantes </h2>";
echo (num1 / $num2 / $num3);

echo "<h2>Exponencial Con constantes </h2>";
echo (num1 ** $num2 ** $num3);
?>