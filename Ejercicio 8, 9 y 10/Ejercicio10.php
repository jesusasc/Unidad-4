<?php

echo '<p><h2>Los numeros son los siguientes:    </h2></p>', '10,3,2,125, 65, 145, 18';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<p><h2>El Numero mayor es:    </h2></p>';
$numeros=array(10,3,2,125, 65, 145, 18); 
echo max($numeros); 

echo '<p><h2>El Numero menor es:    </h2></p>';
$numeros=array(10,3,2,125, 65, 145, 18); 
echo min($numeros); 

echo '<p><h2>La media es:    </h2></p>';
echo '<p>se calcula sumando un grupo de números y dividiendo a continuación por el recuento de dichos números.
 Por ejemplo, el promedio de 2, 3, 3, 5, 7 y 10 es 30 dividido por 6, que es 5.</p>';
$numeros=array(10,3,2,125, 65, 145, 18); 
$media = array_sum($numeros)/count($numeros);
echo ($media);  
?>