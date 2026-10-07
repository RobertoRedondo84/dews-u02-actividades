<?php

$phrase = "Cuantas cifras ves al cabo de un día entero y cuantas eres capaz de recordar al llegar la noche.";

$reverse = strrev($phrase);

echo "<p>Frase original: $phrase</p>";
echo "<p>Frase invertida: $reverse</p>";

$strpos = strpos($phrase, "cifras");

if ($strpos !== false) {
    echo "<p>La palabra 'cifras' se encuentra en la posición: $strpos</p>";
} else {
    echo "<p>La palabra 'cifras' no se encuentra en la frase.</p>";
}

$positionCabo = strpos($phrase, "cabo");

if ($positionCabo !== false) {
    $textAfterCabo = substr($phrase, $positionCabo + 4);
    echo "<p>Texto después de 'cabo': $textAfterCabo</p>";
}

$countDe = substr_count($phrase, "de");

echo "<p>La palabra 'de' aparece $countDe veces en la frase.</p>";