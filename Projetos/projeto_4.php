<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
</head>
<body>
    <h1>Boletim</h1>
    <?php
        $nome = $_GET ["a"];
        echo 'Esse é o Boletim do '. $nome;
        $nota = $_GET ["b"];
        echo '<br/>Sua nota foi '. $nota;
        echo 
    ?>
</body>
</html>