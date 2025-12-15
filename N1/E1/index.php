<?php
/*
Necessitem crear un tipus de dades que representi un animal. 
Els animals tenen un nom i "parlen". Hem de tenir en compte, però, que no és el mateix el so de la “parla” d’un gos, que el d’un gat, per exemple. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments entre diferents animals.

Crea almenys 2 animals.
*/
    require_once('Animal.php');
    require_once('Dog.php');
    require_once('Cat.php');

    $Dog1 = new Dog("Can");
    echo "El gos '$Dog1->Name' fa el seguent so: ". $Dog1->Sound() . PHP_EOL;

    $Cat1 = new Cat("Minino");
    echo "El gat '$Cat1->Name' fa el seguent so: " . $Cat1->Sound() . PHP_EOL;
?>