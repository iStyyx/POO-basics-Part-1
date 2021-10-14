<?php
    require_once 'bicycle.php';
    require_once 'cars.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO 1 - Cars</title>
</head>
<body>
    <?php

        $myBicycle = new Bicycle();
        $myCar = new Car();

        echo '<h1><strong> BIKE 1</strong></h1>';
        $myBicycle->setColor('red');
        echo 'It\'s my own <span style="color:' . $myBicycle->getColor() . ';"><strong>' . $myBicycle->getColor() . '</strong></span> bicycle 😎<br>';
        echo $myBicycle->forward() . ' and moves at ' . $myBicycle->getCurrentSpeed() . ' km/hour! <br>';
        echo $myBicycle->brake();
        echo '<br>The Bicycle moves at ' . $myBicycle->getCurrentSpeed() . ' km/hour! <br>';
        echo $myBicycle->brake();

        echo '<br><br>';

        echo '<h1><strong> CAR 1</strong></h1>';
        $myCar->setColor('blue');
        $myCar->setEnergylevel(100);
        echo $myCar->start() . ' It\'s my own <span style="color:' . $myCar->getColor() . ';"><strong>' . $myCar->getColor() . '</strong></span> car and it has ' . $myCar->getEnergylevel() . '% of energy level 😎<br>';
        echo $myCar->forward() . ' and moves at ' . $myCar->getCurrentSpeed() . ' km/hour! <br>';
        echo $myCar->brake();
        echo '<br>The car moves at ' . $myCar->getCurrentSpeed() . ' km/hour! <br>';
        echo $myCar->brake();


        $myCousinBicycle = new Bicycle();
        $myCousinCar = new Car();

        echo '<h1><strong> BIKE 2</strong></h1>';
        $myCousinBicycle->setColor('purple');
        echo 'It\'s my own <span style="color:' . $myCousinBicycle->getColor() . ';"><strong>' . $myCousinBicycle->getColor() . '</strong></span> bicycle 😎<br>';
        echo $myCousinBicycle->forward() . ' and moves at ' . $myCousinBicycle->getCurrentSpeed() . ' km/hour! <br>';
        echo $myCousinBicycle->brake();
        echo '<br>The Bicycle moves at ' . $myCousinBicycle->getCurrentSpeed() . ' km/hour! <br>';
        echo $myCousinBicycle->brake();

        echo '<br><br>';

        echo '<h1><strong> CAR 2</strong></h1>';
        $myCousinCar->setColor('orange');
        $myCousinCar->setEnergylevel(27);
        echo $myCousinCar->start() . ' It\'s my own <span style="color:' . $myCousinCar->getColor() . ';"><strong>' . $myCousinCar->getColor() . '</strong></span> car and it has ' . $myCar->getEnergylevel() . '% of energy level 😎<br>';
        echo $myCousinCar->forward() . ' and moves at ' . $myCousinCar->getCurrentSpeed() . ' km/hour! <br>';
        echo $myCousinCar->brake();
        echo '<br>The car moves at ' . $myCousinCar->getCurrentSpeed() . ' km/hour! <br>';
        echo $myCousinCar->brake();

    ?>
</body>
</html>