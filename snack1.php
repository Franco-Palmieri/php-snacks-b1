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
        $partite = [
            [
                "casa" => "Lazio",
                "ospite" => "Roma",
                "puntiCasa" => 50,
                "puntiOspite" => 0
            ],
            [
                "casa" => "Foggia",
                "ospite" => "Marsala",
                "puntiCasa" => 30,
                "puntiOspite" => 20
            ],
            [
                "casa" => "Rieti",
                "ospite" => "Latina",
                "puntiCasa" => 44,
                "puntiOspite" => 24
            ],
        ];
        for($x = 0; $x < count($partite); $x++){
            echo "<div>{$partite[$x]['casa']} - {$partite[$x]['ospite']} | {$partite[$x]['puntiCasa']} - {$partite[$x]['puntiOspite']}</div>";
        }
    ?>
</body>
</html>