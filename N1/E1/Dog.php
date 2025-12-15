<?php
    class Dog implements Animal{
        public $Name;

        public function __construct($Name) {
            $this->Name = $Name;
        }  
        public function Sound():string{
            return "Ladrido". PHP_EOL;
        }
    }
?>
