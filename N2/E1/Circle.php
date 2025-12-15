<?php
    class Circle implements Shape {
        const PI = 3.14;
        public int $radius;

        public function __construct($radius) {
            $this->radius = $radius;  
        }
        public function GetArea():string{
            $Result = $this->radius * self::PI;
            return "L'area del cercle es: " . $Result . PHP_EOL; 
        }
    }
?>