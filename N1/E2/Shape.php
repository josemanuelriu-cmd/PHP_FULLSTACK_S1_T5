<?php
    abstract class Shape {
        public string $width;
        public string $high;
        abstract protected function area();
        
        public function __construct($width,$high) {
            $this->width = $width;
            $this->high = $high;
        }
        public function GetArea(){
            echo $this->area();
        }
    }
?>
