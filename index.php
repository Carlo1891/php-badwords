<!-- 
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BadWords</title>
    </head>

    <body>
        <h1>Esercizio PHP</h1>
        <h5>
            <?php
            $parag = "Ciao Carlo, come stai? Sto molto bene Carlo.";

            $badword = $_GET["badword"];
            $goodword = "***";

            $parag_good = str_replace($badword, $goodword, $parag);
            $parag_len = strlen($parag_bad);

            echo $parag_good;
            echo "<br>";
            echo "Lunghezza: ". $parag_len. " caratteri.";
            ?>
        </h5>
    </body>
</html>