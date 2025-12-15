<?php          
    class Rectangle implements Shape{
        public $width;
        public $high;

        public function __construct($width, $high) {
            $this->width = $width;
            $this->high = $high;
        }
        public function GetArea():string{
            $Result = $this->width * $this->high;
            return "L'area del rectangle es: " . $Result . PHP_EOL; 
        }
        public function Area():string{
            $Result = $this->width * $this->high;
            return "L'area del rectangle es: " . $Result . PHP_EOL; 
        }
    }
?>
