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
 
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];
    //invio nella nuova variabili le chiavi teachers & pm

    $arrayKeys = array_keys($db);
    
    for($x = 0; $x <count($arrayKeys); $x++){

        //invio le chiavi interne alle chiavi di teachers & pm ad una nuova variabile
        $internKeys = $arrayKeys[$x];
        
        echo "<div>{$internKeys}</div>";

        for($i = 0; $i < count($db[$internKeys]); $i++){

            $details = $db[$internKeys][$i];
            
            // var_dump($details);
            echo "<div>{$details['name']} {$details['lastname']}</div>";
        }
    }

?>
    
</body>
</html>