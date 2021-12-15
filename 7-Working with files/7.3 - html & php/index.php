<?php
$leeftijd = 16;
?>
<html>
<head>
</head>
<body>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 18 ){
                echo "Je bent te jong om deze pagina te bekijken";
            }
            else{
                echo "Je bent oud genoeg voor deze website";
            }
        ?>
    </div>

</body>
</html>