<?php 
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    // Stampare a schermo il paragrafo e la sua lunghezza.
    // Una parola da censurare viene passata dall’utente tramite parametro GET.
    // Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.


    $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis tempora voluptatum natus magni ipsa aliquid at explicabo praesentium possimus, incidunt reprehenderit quibusdam ullam, esse consequuntur consectetur sapiente! Ducimus, dolor nemo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis tempora voluptatum natus magni ipsa aliquid at explicabo praesentium possimus, incidunt reprehenderit quibusdam ullam, esse consequuntur consectetur sapiente! Ducimus, dolor nemo.";

    $textLength = strlen($text);

    $censorship = $_GET["censored"]; //restituirà "ipsum"

    $textCensored = str_replace($censorship, "***", $text);

    $textLengthCensored = strlen($textCensored);

    
    
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
        <h1>Lunghezza del testo: <?php echo $textLength ?></h1>
    </p>

    PAROLA DA CENSURARE: <?php echo $censorship ?>

    <p>
        <?php echo $textCensored ?> 
        <h1>Lunghezza del testo: <?php echo $textLengthCensored ?></h1>
    </p>
</body>
</html>