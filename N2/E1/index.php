<!--
    Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea.
-->
<?php
    require_once('Shape.php');
    require_once('Triangle.php');
    require_once('Rectangle.php');
    require_once('Circle.php');

    $Triangle = new Triangle(10, 8);
    $Triangle->GetArea();

    $Rectangle = new Rectangle(10, 12);
    $Rectangle->GetArea();  

    $Cercle = new Circle(20);
    $Cercle->GetArea();
?>
