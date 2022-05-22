<?php
$n1=0;
$n2=1;
$total=0;
for ($i=0; $i<10;$i++){
	$suma=$n1+$n2;
	$total+=$suma;
	$n1=$n2;
	$n2=$suma;
	echo $suma."</br>";
	$aux[$i] = $suma;
}
echo "Total: ".$total;