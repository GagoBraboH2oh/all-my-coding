<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $preco = $_GET["p"];
        echo "o preço do produto é $preco";
        $preco += $preco*10/100;
        echo "<br> o preço do produto com aumento de 10% é de: ". number_format($preco, 2);
        $preco -= $preco*10/100;
        echo "<br> o preço do produto com desconto de 10% é de: ".number_format($preco, 2);
    ?>

    <hr>

    <h1>incremento e pos-incremento</h1>

    <?php   
        
        $aa = $_GET["aa"];
        echo "o ano é $aa mas o ano anterior é ". --$aa;
        $aa = $_GET["aa"];
        echo " <br> o ano é $aa mas o proximo ano é ". ++$aa;
        
    ?>
    <hr>
    <h1>liaçoes entre varaveus</h1>
    
    <?php

    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    $v2 = &$v1; 
    echo "valor da variavel 1 é $v1 ";
    echo "<br>valor da variavel 2 é $v2 ";
    ?>

    <hr>
    <h1>variaveis das variantes</h1>

    <?php
        $var = "exemplo"  ;  
        $var2 = "exemploABC";

        echo " a variavel 'var' recebe: $var e a 'var 2' recebe: $var2";

        $$var = "exemploABC";

        echo "<br> agora o 'exemplo' se tornou uma variavel e ficou: $exemplo";

    ?>
</body>
</html>