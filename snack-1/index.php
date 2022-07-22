<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra 
 di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
 </head>
 <body>
 <?php

$matches = [
    [
        'casa' => 'Maverick',
        'trasferta' => 'Huston',
        'puntiCasa' => 108,
        'puntiTrasferta' => 112
    ],
    [
        'casa' => 'Heats',
        'trasferta' => 'Boston',
        'puntiCasa' => 97,
        'puntiTrasferta' => 99
    ],
    [
        'casa' => 'Clippers',
        'trasferta' => 'San Antonio',
        'puntiCasa' => 103,
        'puntiTrasferta' => 125
    ],
    [
        'casa' => 'Bucks',
        'trasferta' => 'Brooklyn',
        'puntiCasa' => 76,
        'puntiTrasferta' => 102
    ],
    [
        'casa' => 'Pistons',
        'trasferta' => 'Sacramento',
        'puntiCasa' => 97,
        'puntiTrasferta' => 92
    ],
];

// var_dump($matches[4]);
?>

<h2>Partite di ieri</h2>

<?php if(count($matches) > 0) { ?>
<ul>
<?php for($i = 0; $i < count($matches); $i++) { ?>
    <?php $thisMatch = $matches[$i]; ?>

    <li>
       <h3>
            <?php echo $thisMatch['casa']; ?> - <?php echo $thisMatch['trasferta']; ?> 
            <?php echo $thisMatch['puntiCasa']; ?> - <?php echo $thisMatch['puntiTrasferta']; ?>
       </h3>
   </li>
   <?php } ?>   
</ul>
<?php } ?>  

 </body>
 </html>