<?php
Class Post extends Message{
    private int $PostalCode;
    
    public function __construct(string $Message, string $Addressee, int $PostalCode){
        parent::__construct($Message, $Addressee);
        $this->PostalCode=$PostalCode;
    }

    public function Notify(): void
    {
        echo "Enviem Correu postal".PHP_EOL;
        echo "Destinatari: ".$this->Addressee.PHP_EOL;
        echo "Codi postal: ".$this->PostalCode.PHP_EOL;
        echo "Missatge: ".$this->Message.PHP_EOL;
    }
}
?>