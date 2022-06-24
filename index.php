<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php

$text = "E buonasera, signore e signori
Fuori gli attori
Vi conviene toccarvi i coglioni
Vi conviene stare zitti e buoni
Qui la gente è strana tipo spacciatori
Troppe notti stavo chiuso fuori
Mo li prendo a calci sti portoni
Sguardo in alto tipo scalatori
Quindi scusa mamma se sto sempre fuori";

$inputCensor = $_GET["censored"];
$censoredtext = str_replace ($inputCensor, "***" , $text);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parole da censurare</title>
</head>
<body>
    <h1>testo originale:</h1>
    <p> <?= $text?></p>
    
 <form action="" method="get">
        <label for="censura">censura</label>
        <input type="text" name="censored">
        <button>inserisci la parola da censurare </button>
 </form>
    <h2>testo corretto:</h2>
    <p><?=$censoredtext?></p>
    <p>lunghezza testo: <?= strlen($censoredtext)?></p>
    
        
</body>
</html>