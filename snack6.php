
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
?>

    <div style="background-color: lightgray;">

        <?php 
            for($x = 0; $x < count($db['teachers']); $x++){
                echo "<div> {$db['teachers'][$x]['name']} {$db['teachers'][$x]['lastname']} </div>";
            }
        ?>

    </div>

    <div style="background-color: lightgreen">
            <?php
                for($i = 0; $i < count($db['pm']); $i++){
                    echo "<div> {$db['pm'][$i]['name']} {$db['pm'][$i]['lastname']} </div>";
                }
            ?>
    </div>
    
</body>
</html>