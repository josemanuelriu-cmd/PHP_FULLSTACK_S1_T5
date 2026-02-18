<?php
    class Rectangle implements Shape{
        public int $width;
        public int $high;

        public function __construct(int $width, int $high) 
        {
            $this->width = $width;
            $this->high = $high;
        }
        
        public function GetArea():string
        {
            $Result = $this->width * $this->high;
            return "L'area del rectangle es: " . $Result . PHP_EOL; 
        }
    }
?>