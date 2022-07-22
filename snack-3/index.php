<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array
non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>
    <?php
    $randomNumbersArray = [];

    while(count($randomNumbersArray) < 15){
        $randomNumber = rand(1,100);
        if(!in_array($randomNumber, $randomNumbersArray)) {
            $randomNumbersArray[] = $randomNumber;
        }
    }

    for($i = 0; $i < count($randomNumbersArray); $i++) {
        $thisNumber = $randomNumbersArray[$i];
        var_dump($thisNumber);
        echo $thisNumber[$value];
    }

    ?>
    
</body>
</html>