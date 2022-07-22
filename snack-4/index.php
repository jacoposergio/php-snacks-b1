<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>
<body>
    <?php
    $paragraph =
    'Manuel Neuer, portiere del Bayern Monaco e della Nazionale tedesca, è finito al centro delle polemiche per un episodio accaduto qualche settimana fa. Insieme a un suo amico è salito a bordo di un taxi — per il tragitto dall’Odeonsplatz di Monaco a un condominio nel quartiere di Lehel — perdendo il portafoglio ritrovato dall’autista, sotto uno dei sedili posteriori, alla fine della sua lunga giornata lavorativa. Dentro al portafoglio c’erano 800 euro in contanti, oltre alla carta di identità, alla patente e a varie carte bancarie. Spinto da un grandissimo atto di generosità o forse dal tifo per il Bayern, l’autista ha deciso di riconsegnare il portafoglio a Neuer, andando prima alla destinazione del viaggio del portiere (ma lì non c’era più) e poi verso l’indirizzo di casa del calciatore.
    Neuer perde il portafogli, tassista fa 120 km per restituirlo. La ricompensa è una maglia. «Una presa in giro»
    di Salvatore Riggio
    La delusione dell’autista che aspettava un ringraziamento diverso dal portiere del Bayern di Monaco: «Ho quattro figli, non posso fare nulla con una maglietta»
    Manuel Neuer, portiere del Bayern Monaco e della Nazionale tedesca, è finito al centro delle polemiche per un episodio accaduto qualche settimana fa. Insieme a un suo amico è salito a bordo di un taxi — per il tragitto dall’Odeonsplatz di Monaco a un condominio nel quartiere di Lehel — perdendo il portafoglio ritrovato dall’autista, sotto uno dei sedili posteriori, alla fine della sua lunga giornata lavorativa. Dentro al portafoglio c’erano 800 euro in contanti, oltre alla carta di identità, alla patente e a varie carte bancarie. Spinto da un grandissimo atto di generosità o forse dal tifo per il Bayern, l’autista ha deciso di riconsegnare il portafoglio a Neuer, andando prima alla destinazione del viaggio del portiere (ma lì non c’era più) e poi verso l’indirizzo di casa del calciatore.
    Agli Europei indossò la fascia arcobaleno
    Così dopo aver percorso 120 chilometri (una corsa da 400 euro), il tassista ha restituito il portafoglio al manager del portiere a Tegernsee, località del distretto di Miesbach in Baviera. Insieme al portafogli, ha lasciato i suoi recapiti e ha spiegato anche la distanza percorsa per centrare il suo obiettivo. Così il portiere del Bayern Monaco, come ricompensa, gli ha inviato una maglia del club bavarese. E la delusione è stata grande. Anche perché l’uomo si aspettava almeno che Neuer gli pagasse la corsa: «La ricompensa per questo viaggio è stata una presa in giro. Ho quattro figli. Non posso fare nulla con una maglietta», le sue parole a Sky Germany. Per legge in Germania, chiunque restituisca proprietà del valore di 500 euro ha diritto al 5% del valore e un ulteriore 3% per proprietà di valore superiore a quello. In sostanza l’autista doveva ricevere 34 euro per il suo atto di generosità. Chissà se Neuer avrà pensato a tutto questo quando ha deciso di mandargli la maglietta.';

    $newParagraph = explode(".", $paragraph);
    
    for($i = 0; $i < count($newParagraph); $i++) {
        echo $newParagraph[$i].'.'.'<br><br>';
    }
    ?>

</body>
</html>