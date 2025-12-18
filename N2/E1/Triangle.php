<?php
    class Triangle implements Shape{
        /*public $width;
        public $high;*/
        public function __construct($width, $high) {
            $this->width = $width;
            $this->high = $high;
        }
        public function GetArea():string{
            $Result = $this->width * $this->high / 2;
            return "L'area del triange es: " . $Result . PHP_EOL; 
        }
    }
?>