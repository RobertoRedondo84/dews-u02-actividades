<?php

// Creamos un array con 10 números enteros.
$numbers = [8, 3, 6, 2, 9, 1, 5, 4, 7, 10];


// Mostramos el array original.
echo "Array original: ";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br><br>";


// --------------------------------------------------
// ORDENACIÓN POR SELECCIÓN
// --------------------------------------------------

// Recorremos las posiciones del array.
// $i representa la posición que queremos ordenar.
for ($i = 0; $i < count($numbers) - 1; $i++) {

    // Suponemos inicialmente que el elemento
    // situado en $i es el menor.
    $min = $i;


    // Buscamos un número menor dentro
    // de la parte que todavía no está ordenada.
    for ($j = $i + 1; $j < count($numbers); $j++) {

        // Comprobamos si el elemento actual
        // es menor que nuestro mínimo.
        if ($numbers[$j] < $numbers[$min]) {

            // Si encontramos un número menor,
            // guardamos su posición.
            $min = $j;
        }
    }


    // --------------------------------------------------
    // INTERCAMBIO
    // --------------------------------------------------

    // Guardamos temporalmente el valor de la posición $i.
    $temp = $numbers[$i];

    // Colocamos el número mínimo en la posición $i.
    $numbers[$i] = $numbers[$min];

    // Colocamos el valor que habíamos guardado
    // en la posición donde estaba el mínimo.
    $numbers[$min] = $temp;
}


// Mostramos el array después de ordenarlo.
echo "Array ordenado: ";

foreach ($numbers as $number) {
    echo $number . " ";
}

?>