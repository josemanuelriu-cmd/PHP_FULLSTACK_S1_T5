<?php

Class Email extends Message{
    
    public function __construct($Message, $Addressee){
        parent::__construct($Message, $Addressee);
    }

    public function Notify(){
        if (filter_var($this->Addressee, FILTER_VALIDATE_EMAIL)) {
            echo "Enviem Email".PHP_EOL;
            echo "Destinatari: ".$this->Addressee.PHP_EOL;
            echo "Missatge: ".$this->Message.PHP_EOL;
        }
        else {
            echo "Error. L'email no es valid".PHP_EOL;
        }
    }
}
?>