<?php
Class SMS extends Message{
    
    public function __construct(string $Message, string $Addressee){
        parent::__construct($Message, $Addressee);
    }

    public function Notify(): void
    {
        if (filter_var($this->Addressee, FILTER_SANITIZE_NUMBER_INT)) {
            echo "Enviem SMS<br>";
            echo "Destinatari: ".$this->Addressee.PHP_EOL;
            echo "Missatge: ".$this->Message.PHP_EOL;
        }
        else {
            echo "Error. El teléfon no es valid".PHP_EOL;
        }
    }
}
?>