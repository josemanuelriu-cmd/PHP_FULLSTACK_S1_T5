<?php
    class Triangle extends Shape {
        protected function Area(){
            $Result = $this->width * $this->high / 2;
            echo "L'area del triange es: " . $Result . "<br>"; 
        }
    }
?>