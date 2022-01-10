<?php
require_once __DIR__ . '/user.php';
require_once __DIR__ . '/userPremium.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>Shop-Online</h1>
    </header>
    <main>
        <section>
                <?php
                $utente1 = new Utente ('Francesco', 'Cuffie', 89);
                ?>
            <h2> Nome utente: 
                <?php 
                echo $utente1->getName();
                ?>
            </h2>

            <h2> Prodotto Selezionato:
                <?php 
                    echo $utente1->getSurname();
                ?>
            </h2>

            <h2> Prezzo:
                <?php
                echo $utente1->getPrice() . '€';
                ?>
            </h2>
        </section>
        <hr>
        <section>
                <?php
                $utentePrime1 = new UtentePrime ('Lorenzo', 'Cuffie', 89,);
                ?>
            <h2> Nome utente Premium: 
                <?php 
                echo $utentePrime1->getName();
                ?>
            </h2>

            <h2> Prodotto Selezionato:
                <?php 
                    echo $utentePrime1->getSurname();
                ?>
            </h2>

            <h2> Prezzo:
                <?php
                echo $utentePrime1->getPrice() . '€';
                ?>
            </h2>

            <h2> Prezzo Scontato:
                <?php
                echo $utentePrime1->setPrezzoScontato() . '€';
                ?>
            </h2>

            <h2> Valore Sconto Prime
                <?php
                echo $utentePrime1->valoreSconto() . '€';
                ?>
            </h2>
        </section>
    </main>

</body>
</html>