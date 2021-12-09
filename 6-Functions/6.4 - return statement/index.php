<?php
    function geefTienProcent(){
        $koopprijs = 75;
        $korting = 10;
        $prijs = ($koopprijs / 100)* $korting;
        echo $koopprijs - $prijs;
    }
    echo geefTienProcent();
?>