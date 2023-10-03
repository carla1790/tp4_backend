<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP N°4</title>
</head>
<body>
 <h1>MI TP N° 4</h1>

<?php

// Ejercicio 1

print "<h2>Ejercicio 1</h2\n";

$pares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

   foreach ($pares as $valor) {
   print "<p>$valor</p>\n";
   }

// Ejercicio 2

print "<h2>Ejercicio 2</h2\n";

   print "</pre>\n";

$matriz2 = ["Pedro", "Ana", 34, 1];

   print_r($matriz2);
   print "</pre>\n";

// Ejercicio 3

print "<h2>Ejercicio 3</h2\n";

$matriz3 = [   
"Nombre"=>'Pedro',
"Apellido"=>'Torres',
"Dirección"=>'Av. Mayor 3703',
"Teléfono"=>1122334455,
];

print "</pre>\n";
print_r($matriz3);
print "</pre>\n";

// Ejercicio 4

print "<h2>Ejercicio 4</h2\n";

$ciudades1 = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach ($ciudades1 as $indice=>$valor) {
   print "<p>La ciudad con el índice $indice es $valor</p>\n";
   }
 
   print "</pre>\n";

// Ejercicio 5

print "<h2>Ejercicio 5</h2\n";

$ciudades2 = [
   "MD"=>'Madrid',
   "BCL"=>'Barcelona',
   "LD"=>'Londres',
   "NY"=>'New York',
   "LA"=>'Los Ángeles',
   "CCG"=>'Chicago',
];

foreach ($ciudades2 as $indice=>$valor) {
   print "<p>El índice de $valor es $indice</p>\n";
   }

// Fin del TP N°4 :)
print "<h2>Fin del TP4</h2\n";

?>
</body>
</html>