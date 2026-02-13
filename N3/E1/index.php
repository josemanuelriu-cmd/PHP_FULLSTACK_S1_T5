<!--
    Imagina que estem implementant un mecanisme de notificacions.

    Les notificacions notifiquen(com no podia ser d'altra manera :)) un missatge.

    Podem notificar mitjançant Email, SMS o Correu ordinari.

    Fes una estructura de classes que ens permeti implementar tot plegat.
-->
<?php
include_once "Message.php";
include_once "Email.php";
include_once "SMS.php";
include_once "Post.php";

$messages = [
    new Email("Hola que tal", "mail@mail.es"),
    new Email("Hola que tal 2", "nomail.es"),
    new SMS("Missatge prova SMS", "123456789"),
    new SMS("Missatge 2 prova SMS", "12s3f6789"),
    new Post("Carta 1", "Direcció correu postal", 80011)
];

foreach ($messages as $message) {
    $message->notify();
}    
?>