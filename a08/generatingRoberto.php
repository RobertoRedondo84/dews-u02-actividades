<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Generando HTML</title>
</head>

<body>    
    
    <h1>Generando HTML</h1>
    
    <?php
    // Número aleatorio entre -200 y 200 para sec1.
    $numeroSec1 = rand(-200, 200);

    // Nota aleatoria entre 0 y 10 para sec2.
    $notaSec2 = rand(0, 10);

    // Número aleatorio entre 0 y 100 para sec3.
    $numeroSec3 = rand(0, 100);

    // Número de filas y columnas para sec4.
    $filasSec4 = rand(1, 10);
    $columnasSec4 = rand(1, 10);

    // Número aleatorio entre 1 y 1000 para sec5.
    $numeroSec5 = rand(1, 1000);

    ?>

<!-- MENÚ DE NAVEGACIÓN -->    
    <ul>
    <li><a href="#sec1">Sección 1</a></li>
    <li><a href="#sec2">Sección 2</a></li>
    <li><a href="#sec3">Sección 3</a></li>
    <li><a href="#sec4">Sección 4</a></li>
    <li><a href="#sec5">Sección 5</a></li>
    </ul>

    <!-- SECCIONES -->

    <section>

    <article id="sec1">
        <h1>Sección 1</h1>
        <?php

        // Comprobamos si el número es negativo.
        if ($numeroSec1 < 0) {

            echo "<p>El número $numeroSec1 es negativo.</p>";

        // Si no es negativo, comprobamos si es cero.
        } elseif ($numeroSec1 == 0) {

            echo "<p>El número es cero.</p>";

        // Si no es negativo ni cero, tiene que ser positivo.
        } else {

            echo "<p>El número $numeroSec1 es positivo.</p>";
        }

    ?>
    </article>

    <article id="sec2">
        <h1>Sección 2</h1>
        <?php
        switch ($notaSec2) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
                echo "<p>Insuficiente</p>";
                break;
            case 5:
                echo "<p>Suficiente</p>";
                break;
            case 6:
                echo "<p>Bien</p>";
                break;
            case 7:
            case 8:
                echo "<p>Notable</p>";
                break;
            case 9:
            case 10:
                echo "<p>Sobresaliente</p>";
                break;
        }
        ?>
    </article>

    <article id="sec3">
        <h1>Sección 3</h1>
        <?php
            echo "<p>Tabla de multiplicar del número $numeroSec3</p>";
        ?>
        <table border="1">

            <tr>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
        
            <?php

        // Recorremos los números del  al 20.
        for ($i = 0; $i <= 20; $i++) {

            // Abrimos una fila.
            echo "<tr>";

            // Mostramos la operación.
            echo "<td>$numeroSec3 × $i</td>";

            // Calculamos y mostramos el resultado.
            echo "<td>" . ($numeroSec3 * $i) . "</td>";

            // Cerramos la fila.
            echo "</tr>";
        }

        ?>

        </table>
        

    </article>

    <article id="sec4">
        <h1>Sección 4</h1>

        <?php

    echo "<p>Filas: $filasSec4</p>";
    echo "<p>Columnas: $columnasSec4</p>";

        ?>

        <table border="1">

            <?php

// Recorremos las filas.
for ($i = 0; $i < $filasSec4; $i++) {

    // Abrimos una fila.
    echo "<tr>";

    // Recorremos las columnas.
    for ($j = 0; $j < $columnasSec4; $j++) {

        // Primera fila: mostramos las cabeceras de las columnas.
        if ($i == 0 && $j != 0) {

            echo '<th>' . $j . '</th>';

        // Primera columna: mostramos las cabeceras de las filas.
        } elseif ($j == 0 && $i != 0) {

            echo '<th>' . $i . '</th>';

        // Esquina superior izquierda.
        } elseif ($i == 0 && $j == 0) {

            echo '<th></th>';

        // Resto de celdas.
        } else {

            echo '<td>×</td>';
        }
    }

    // Cerramos la fila.
    echo "</tr>";
}

?>

</table>

    </article>

    <article id="sec5">
        <h1>Sección 5</h1>
        <?php

    // Mostramos el número que vamos a descomponer.
    echo "<p>Número: $numeroSec5 €</p>";


    // Billetes de 500 €.
    $billetes500 = intval($numeroSec5 / 500);
    $resto = $numeroSec5 % 500;


    // Billetes de 200 €.
    $billetes200 = intval($resto / 200);
    $resto = $resto % 200;


    // Billetes de 100 €.
    $billetes100 = intval($resto / 100);
    $resto = $resto % 100;


    // Billetes de 50 €.
    $billetes50 = intval($resto / 50);
    $resto = $resto % 50;


    // Billetes de 20 €.
    $billetes20 = intval($resto / 20);
    $resto = $resto % 20;


    // Billetes de 10 €.
    $billetes10 = intval($resto / 10);
    $resto = $resto % 10;


    // Billetes de 5 €.
    $billetes5 = intval($resto / 5);
    $resto = $resto % 5;


    // Monedas de 2 €.
    $monedas2 = intval($resto / 2);
    $resto = $resto % 2;


    // Monedas de 1 €.
    $monedas1 = $resto;

    ?>


    <ul>

        <li>Billetes de 500 €: <?php echo $billetes500; ?></li>

        <li>Billetes de 200 €: <?php echo $billetes200; ?></li>

        <li>Billetes de 100 €: <?php echo $billetes100; ?></li>

        <li>Billetes de 50 €: <?php echo $billetes50; ?></li>

        <li>Billetes de 20 €: <?php echo $billetes20; ?></li>

        <li>Billetes de 10 €: <?php echo $billetes10; ?></li>

        <li>Billetes de 5 €: <?php echo $billetes5; ?></li>

        <li>Monedas de 2 €: <?php echo $monedas2; ?></li>

        <li>Monedas de 1 €: <?php echo $monedas1; ?></li>

    </ul>

    </article>

    </section>
</body>

</html>
