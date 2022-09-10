<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    mark{
        color: purple;
        background:none;
    }
</style>
<body>
    <?php
    $nome = "gabriel";
    $idade = "17";
    $altura = "1.73";
    echo ("seu nome é $nome com $idade e $altura de altura");
    ?>
    <h2><span>alterando dados com <mark>PHP</mark><span></h2>

    <?php 
    $nome = "guilherme";
    $idade = "12";
    $altura = "1.50";

    echo ("seu nome é $nome com $idade e $altura de altura");
    ?>

</body>
</html>