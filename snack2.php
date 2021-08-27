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
    $nome = $_GET['nome'];
    $mail = $_GET['mail'];
    $eta = $_GET['eta'];
    $search = '@';
    $pos = strpos($mail, $search);

  

    if(strlen($nome) >= 3 && $pos && is_numeric($eta)){
        echo "Accesso Riuscito";
    }else{
        echo "Accesso Negato";
    };
    ?>

</body>
</html>