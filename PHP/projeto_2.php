<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto_2</title>
</head>
<body>
    <h2>SOMA</h2>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1 + $n2;
        echo "A soma entre $n1 e $n2 é $s";
        echo "<br/>Isso é matematica."
    ?>
</body>
</html>