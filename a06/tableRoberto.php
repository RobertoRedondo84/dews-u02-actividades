<?php

// TABLA DE MULTIPLICAR DEL 1 AL 10
// Iniciamos un bucle para recorrer las filas.

for ($i = 1; $i <= 10; $i++) {

    // Abrimos una nueva fila de la tabla HTML.
    echo "<tr>";

    // BUCLE INTERIOR
    
    for ($j = 1; $j <= 10; $j++) {

        // COMPROBAMOS LA ESQUINA SUPERIOR IZQUIERDA
        // $i == 1 && $j == 1
        
        if ($i == 1 && $j == 1) {

            // Mostramos una celda de cabecera <th>.
            echo "<th>×</th>";

        
        // COMPROBAMOS LA PRIMERA FILA
        // Si $i vale 1 significa que estamos en la primera fila de la tabla.
        } elseif ($i == 1) {
            // Mostramos una celda de cabecera <th>.
    
            echo "<th>$j</th>";

        // COMPROBAMOS LA PRIMERA COLUMNA
        // Si $j vale 1 significa que estamos en laprimera columna de la tabla.
        } elseif ($j == 1) {
            // Mostramos una celda de cabecera <th>.
        
            echo "<th>$i</th>";
        } else {
            echo "<td>" . ($i * $j) . "</td>";
        }
    }
    echo "</tr>";
}
?>