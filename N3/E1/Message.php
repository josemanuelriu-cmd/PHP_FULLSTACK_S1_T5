<?php
Class Message{
    public string $Message;
    public string $Addressee;

    public function __construct($Message, $Addressee)
    {
        $this->Message=$Message;
        $this->Addressee=$Addressee;
    }
}
?>