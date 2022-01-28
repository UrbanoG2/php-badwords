<?php 
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    // Stampare a schermo il paragrafo e la sua lunghezza.
    // Una parola da censurare viene passata dall’utente tramite parametro GET.
    // Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.


    $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis tempora voluptatum natus magni ipsa aliquid at explicabo praesentium possimus, incidunt reprehenderit quibusdam ullam, esse consequuntur consectetur sapiente! Ducimus, dolor nemo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis tempora voluptatum natus magni ipsa aliquid at explicabo praesentium possimus, incidunt reprehenderit quibusdam ullam, esse consequuntur consectetur sapiente! Ducimus, dolor nemo.";

    $textLength = strlen($text);

    $censorship = $_GET["censored"]; //restituirà quello che scrivo sopra

    $textCensored = str_replace($censorship, "***", $text);

    $textLengthCensored = strlen($textCensored);

    $newString = "Paragraph with random words just for testing a couple of things";

    $arrayExploded = explode(" ", $newString);
    
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
    <p>
        <?php echo $text ?> 
    </p>

    <h1>Lunghezza del testo: <?php echo $textLength ?></h1>

    PAROLA DA CENSURARE: <?php echo $censorship ?>

    <p>
        <?php echo $textCensored ?> 
    </p>

    <h1>Lunghezza del testo: <?php echo $textLengthCensored ?></h1>

    <hr>

    <h1> ESPLODERE UNA STRINGA </h1>

    <p>
        <?php echo $newString ?>
    </p>

    <?php 
        $arrayExploded;
        var_dump($arrayExploded);

        // $strCensored = strpos($text, $censorship);

        // echo($strCensored);
    ?>

    <hr>


    <h1>Recuperare la posizione di una stringa</h1>
    <?php 

        $arrFirstText = explode(",", $text);
        var_dump($arrFirstText);
        // $strCensored = strpos($text, $censorship);
        // echo($strCensored);
    ?>

    <h2>Ora abbiamo l'array formato dal testo di sopra che, ad ogni virgola, diventa una stringa singola</h2>

    <h4>Recuperiamo ora la posizione della parola censurata sopra all'interno del secondo elemento dell'array che è questo:</h4>

    <?php 
        $myString = $arrFirstText[1];
        echo $myString;
    ?>

    <h3>Posizione</h3>

    <?php
        $censoredWord = strpos($myString, $censorship);
        echo $censoredWord;
    ?>


</body>
</html>