<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-5_Level-3_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>POO Avanzat nivell 3</h1>
        <!--
            Imagina que estem implementant un mecanisme de notificacions.

			Les notificacions notifiquen(com no podia ser d'altra manera :)) un missatge.

			Podem notificar mitjançant Email, SMS o Correu ordinari.

			Fes una estructura de classes que ens permeti implementar tot plegat.
        -->
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

        Class Email extends Message{            
            
            public function __construct($Message, $Addressee){                
                parent::__construct($Message, $Addressee);
            }

            public function Notify(){
                if (filter_var($this->Addressee, FILTER_VALIDATE_EMAIL)) {
                    echo "Enviem Email<br>";
                    echo "Destinatari: ".$this->Addressee."<br>";
                    echo "Missatge: ".$this->Message."<br><br>";
                }
                else {                    
                    echo "Error. L'email no es valid<br><br>";
                }
            }
        }

        Class SMS extends Message{            
            
            public function __construct($Message, $Addressee){                
                parent::__construct($Message, $Addressee);
            }

            public function Notify(){
                if (filter_var($this->Addressee, FILTER_SANITIZE_NUMBER_INT)) {
                    echo "Enviem SMS<br>";
                    echo "Destinatari: ".$this->Addressee."<br>";
                    echo "Missatge: ".$this->Message."<br><br>";
                }
                else {                    
                    echo "Error. El teléfon no es valid<br><br>";
                }
            }
        }

        Class Post extends Message{
            public int $PostalCode;            
            
            public function __construct($Message, $Addressee, $PostalCode){                
                parent::__construct($Message, $Addressee);
                $this->PostalCode=$PostalCode;
            }

            public function Notify(){
                echo "Enviem Correu postal<br>";
                echo "Destinatari: ".$this->Addressee."<br>";
                echo "Codi postal: ".$this->PostalCode."<br>";
                echo "Missatge: ".$this->Message."<br><br>";
            }
        }


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
    </div>
</body>
</html>