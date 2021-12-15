<?php
    $var = 14;
    $var1 = 3;

    if($var < 10 && $var1 > 5) {
        echo "het getal zit tussen de 10 en de 5!";
    } else {
        echo "het getal is groter dan 10 of kleiner dan 5!";
    }

    echo "</br>";

    if($var < 10 || $var1 > 5) {
        echo "Een of beide van de twee waardes zijn waar.";
    } else {
        echo "Geen idee wat het is";
    }

    echo "</br>";

    if($var < 10 xor $var1 > 5) {
        echo "Een van de twee waardes is waar maar niet beide";
    } else {
        echo "Beide waardes zijn waar";
    }

    echo "</br>";

    if($var < 10 != $var1 > 5) {
        echo "Geen idee";
    } else {
        echo "Ook geen idee wat dit doet";
    }
?>