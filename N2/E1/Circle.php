<?php
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
?>