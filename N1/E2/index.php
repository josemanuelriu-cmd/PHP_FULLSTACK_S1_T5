<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-5_Level-1_ex-2</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO Avanzat nivell 1</h1>
        <!--
            Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
            Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la figura.
        -->
        <?php 
            require_once('Shape.php');
            require_once('Triangle.php');
            require_once('Rectangle.php');
            $Triangle = new Triangle(10, 8);
            $Triangle->GetArea();

            $Rectangle = new Rectangle(10, 12);
            $Rectangle->GetArea();  
        ?>
    </div>
</body>
</html>