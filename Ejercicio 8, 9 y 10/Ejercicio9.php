<?php
echo "<h1 style='text-align:center'>De un arreglo mostrar una lista de usuarios con su nombre, contraseña y fecha de ingreso</h1>";
$datos = [
    ["user" => "Pepe", "pass" => 85780, "Fecha" => "22/11/2019"],
    ["user" => "Juan", "pass" => 828585, "Fecha" => "10/03/2008"],
    ["user" => "Maria", "pass" => 152468727, "Fecha" => "31/01/2010"],
    ["user" => "Rosa", "pass" => 52424500, "Fecha" => "22/05/2000"],
    ["user" => "Vanessa", "pass" => 89527852, "Fecha" => "13/09/2018"],
    ["user" => "Toño", "pass" => 4245427, "Fecha" => "05/08/2007"],
];

print "<p>Nombre del usuario: {$datos[0]["user"]}, Su password es {$datos[0]["pass"]}, Fecha de ingreso {$datos[0]["Fecha"]}</p>\n";
print "<p>Nombre del usuario: {$datos[1]["user"]}, Su password es {$datos[1]["pass"]}, Fecha de ingreso {$datos[1]["Fecha"]}</p>\n";
print "<p>Nombre del usuario: {$datos[2]["user"]}, Su password es {$datos[2]["pass"]}, Fecha de ingreso {$datos[2]["Fecha"]}</p>\n";
print "<p>Nombre del usuario: {$datos[3]["user"]}, Su password es {$datos[3]["pass"]}, Fecha de ingreso {$datos[3]["Fecha"]}</p>\n";
print "<p>Nombre del usuario: {$datos[4]["user"]}, Su password es {$datos[4]["pass"]}, Fecha de ingreso {$datos[4]["Fecha"]}</p>\n";
print "<p>Nombre del usuario: {$datos[5]["user"]}, Su password es {$datos[5]["pass"]}, Fecha de ingreso {$datos[5]["Fecha"]}</p>\n";

?>