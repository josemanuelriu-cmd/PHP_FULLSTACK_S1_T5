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
?>