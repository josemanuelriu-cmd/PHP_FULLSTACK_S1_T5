<?php
    class Triangle extends Shape {
        protected function area(){
            $Result = $this->width * $this->high / 2;
            echo "L'area del triange es: " . $Result . PHP_EOL; 
        }
    }
?>
