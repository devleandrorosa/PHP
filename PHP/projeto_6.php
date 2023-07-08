<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $valor = $_GET["v"];
            $raizquadrada = sqrt($valor);
            echo "A raiz de $valor é igual a " . number_format($raizquadrada,2) . ".";
        ?>
        <a href="../../PHP/HTML/form.html">Voltar</a>
</body>
</html>