<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $classe = [
        ['nome' => "Francesco",
         'cognome' => "Palmieri",
         'voti' => [5, 6, 4, 7]
        ],
        ['nome' => "Michele",
         'cognome' => "Pagano",
         'voti' => [3, 4, 1, 5]
        ],
        ['nome' => "Francesca",
         'cognome' => "Monti",
         'voti' => [8, 6, 3, 6]
        ],  
    ];

    for ($x = 0; $x < count($classe); $x++){

        $media = array_sum($classe[$x]['voti']) / count($classe[$x]['voti']);

        echo "<div> {$classe[$x]['nome']} {$classe[$x]['cognome']} {$media} </div>";

    }
    ?>
    
</body>
</html>