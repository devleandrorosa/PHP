<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto_4</title>
</head>
<body>
    <?php
        $produto =  $_GET['produto'];  
        $preco = $_GET['preco'];
        $desconto = $_GET['desconto'];
        echo "O preço do {$produto} com {$desconto}% de desconto é {$preco * {$desconto/100}}";
    ?>
</body>
</html>