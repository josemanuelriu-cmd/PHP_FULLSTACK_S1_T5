<?php
    class Cat implements Animal{
        public $Name;

        public function __construct($name) {
            $this->Name = $name;
        }
        public function Sound():string{
            return "Maullido". PHP_EOL;
        }
    }
?>
