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
            Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
            Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la figura.
        -->
        <?php          
            abstract class Shape {
                public int $width;
                public int $high;
                abstract protected function Area();
                
                public function __construct($width,$high) {
                    $this->width = $width;
                    $this->high = $high;
                }
                public function GetArea(){
                    echo $this->Area();
                }
            }

            class Triangle extends Shape {
                protected function Area(){
                    $Result = $this->width * $this->high / 2;
                    echo "L'area del triange es: " . $Result . "<br>"; 
                }
            }

            class Rectangle extends Shape {
                protected function Area(){
                    $Result = $this->width * $this->high;
                    echo "L'area del rectangle es: " . $Result . "<br>"; 
                }
            }

            class Circle extends Shape {
                const PI = 3.14;
                public int $radius;

                public function __construct($radius) {
                    $this->radius = $radius;  
                }
                protected function Area(){
                    $Result = $this->radius * self::PI;
                    echo "L'area del cercle es: " . $Result . "<br>"; 
                }
            }

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