<?php

require __DIR__ . '/funcionesRoberto.php';

$num1 = 8;
$num2 = 18;

echo "Suma: " . sumar($num1, $num2) . "<br>";
echo "Resta: " . restar($num1, $num2) . "<br>";
echo "Multiplicación: " . multiplicar($num1, $num2) . "<br>";
echo "División: " . dividir($num1, $num2) . "<br>";
echo "Módulo: " . modulo($num1, $num2) . "<br>";
echo "¿Son iguales?: " . (iguales($num1, $num2) ? "Sí" : "No") . "<br>";
echo "¿Es par?: " . (esPar($num1) ? "Sí" : "No") . "<br>";