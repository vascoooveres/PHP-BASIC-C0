<?php
    $myDogNames = ['Hond1', 'Hond2', 'Hond3'];
    $myDogNames[3] = 'Hond6';
    $myDogNames[4] = 'Hond5';
    $myDogNames[5] = 'Hond4';
?>
    <ul>
        <li><?php echo $myDogNames[0]; ?></li>
        <li><?php echo $myDogNames[1]; ?></li>
        <li><?php echo $myDogNames[2]; ?></li>
    </ul>
    <ul>
        <li><?php echo $myDogNames[3]; ?></li>
        <li><?php echo $myDogNames[4]; ?></li>
        <li><?php echo $myDogNames[5]; ?></li>
    </ul>