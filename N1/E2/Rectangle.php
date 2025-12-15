<?php          
    class Rectangle extends Shape {
        protected function area(){
            $Result = $this->width * $this->high;
            echo "L'area del rectangle es: " . $Result . "<br>"; 
        }
    }
?>
