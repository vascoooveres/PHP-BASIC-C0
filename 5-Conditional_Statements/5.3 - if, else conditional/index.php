<?php
    $test1 = 3;
    $test2 = 6;
    if($test1 == $test2) {
        echo "Gelijk";
    }
    else {
        echo "Niet gelijk";
    }
    echo "</br>";

    if($test1 === $test2) {
        echo "Identiek";
    }
    else {
        echo "Niet identiek";
    }
    echo "</br>";
    
    if($test1 > $test2) {
        echo "Groter";
    }
    else {
        echo "Niet groter";
    }
    echo "</br>";
    
    if($test1 < $test2) {
        echo "Het is kleiner";
    }
    else {
        echo "Het is niet kleiner";
    }
    echo "</br>";

    if($test1 >= $test2) {
        echo "Het is groter over gelijk";
    }
    else {
        echo "Het is niet groter over gelijk";
    }
    echo "</br>";

    if($test1 <= $test2) {
        echo "Het is kleiner of gelijk";
    }
    else {
        echo "Het is niet kleiner of gelijk";
    }
?>