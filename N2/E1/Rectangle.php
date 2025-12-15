<?php
    class Rectangle extends Shape {
        protected function Area(){
            $Result = $this->width * $this->high;
            echo "L'area del rectangle es: " . $Result . "<br>"; 
        }
    }
?>