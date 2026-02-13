<?php
abstract class Message{
    protected string $Message;
    protected string $Addressee;

    public function __construct(string $Message, string $Addressee)
    {
        $this->Message=$Message;
        $this->Addressee=$Addressee;
    }

    abstract public function notify(): void;
}
?>