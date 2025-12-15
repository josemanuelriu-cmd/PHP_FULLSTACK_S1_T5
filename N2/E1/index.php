<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-5_Level-2_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO Avanzat nivell 2</h1>
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
    </div>
</body>
</html>