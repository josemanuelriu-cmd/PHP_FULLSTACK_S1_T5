<?php
    require_once('Animal.php');
    require_once('Dog.php');
    require_once('Cat.php');
    $Animal1 = new Animal();
    $Animal1->Sound();

    $Dog1 = new Dog();
    $Dog1->Sound();

    $Cat1 = new Cat();
    $Cat1->Sound();
?>