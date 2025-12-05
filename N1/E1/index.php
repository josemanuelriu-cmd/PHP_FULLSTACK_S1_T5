<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-5_Level-1_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO avanzat nivell 1</h1>
        <!--
           Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom i "parlen". 
           Hem de tenir en compte, però, que no és el mateix el so de la “parla” d’un gos, que el d’un gat, per exemple. 
           Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments entre diferents animals.

            Crea almenys 2 animals. 
        -->
        <?php          
            class Animal {                
                public function __construct() {
                }  
                public function Sound(){
                    echo "Animal sound<br>";
                }
            }
            class Dog extends Animal{
                public function __construct() {
                }  
                public function Sound(){
                    echo "Dog sound<br>";
                }
            }
            class Cat extends Animal{
                public function __construct() {
                }  
                public function Sound(){
                    echo "Cat sound<br>";
                }
            }

            $Animal1 = new Animal();
            $Animal1->Sound();

            $Dog1 = new Dog();
            $Dog1->Sound();

            $Cat1 = new Cat();
            $Cat1->Sound();

        
        ?>
    </div>
</body>
</html>