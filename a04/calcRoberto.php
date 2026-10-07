<?php

$num1 = 8;
$num2 = 18;

$suma = $num1 + $num2;
//echo "$num1 + $num2 = $suma<br>";

$resta = $num1 - $num2;
//echo "$num1 - $num2 = $resta<br>";

$multiplication = $num1 * $num2;
//echo "$num1 * $num2 = $multiplication<br>";

$division = $num1 / $num2;
//echo "$num1 / $num2 = $division<br>";

$modulo = $num2 % $num1;
//echo "$num2 % $num1 = $modulo<br>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>

    <h1>Calculando</h1>

    <h2>Operaciones</h2>

<p><?php echo "$num1 + $num2 = $suma"; ?></p>
<p><?php echo "$num1 - $num2 = $resta"; ?></p>
<p><?php echo "$num1 * $num2 = $multiplication"; ?></p>
<p><?php echo "$num1 / $num2 = $division"; ?></p>
<p><?php echo "$num2 % $num1 = $modulo"; ?></p>

    <h2>Comparación</h2>

<?php
if ($num1 > $num2) {
    echo "<p>$num1 es mayor que $num2</p>";
} elseif ($num2 > $num1) {
    echo "<p>$num2 es mayor que $num1</p>";
} else {
    echo "<p>Los dos números son iguales</p>";
}
?>

    <h2>Par o impar</h2>

<?php
if ($num1 % 2 == 0) {
    echo "<p>$num1 es par</p>";
} else {
    echo "<p>$num1 es impar</p>";
}

if ($num2 % 2 == 0) {
    echo "<p>$num2 es par</p>";
} else {
    echo "<p>$num2 es impar</p>";
}
?>

</body>
</html>