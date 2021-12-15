<?php
    
    function mijnNaamIsGroot(){
        $voornaam = "Vasco";
        $achternaam = "Overes";
        $geheleNaam = $voornaam . " " . $achternaam;
        $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
        echo $geheleNaam;
    }
    mijnNaamIsGroot();
?>