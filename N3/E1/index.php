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

$Email1 = new Email("Hola que tal", "mail@mail.es"); 
$Email1->Notify();
$Email2 = new Email("Hola que tal 2", "Nomail.es"); 
$Email2->Notify();

$SMS1 = new SMS("Missatge prova SMS", "123456789");
$SMS1->Notify();
$SMS2 = new SMS("Missatge 2 prova SMS", "12s3f6789");
$SMS2->Notify();

$PostalCode1 = new Post("Carta 1", "Direccio correu postal", 12345);
$PostalCode1->Notify();
    
?>