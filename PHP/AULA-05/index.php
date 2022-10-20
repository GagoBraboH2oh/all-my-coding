<?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $s = ($n1 + $n2) / 2;
    echo "o valor da variavel n1 na URL É". $n1;
    echo "<br> o valor da variavel n2 na URL É". $n2;
    echo "<br> a soma vale". ($n1 + $n2);
    echo "<br>";
    echo "a subtraçao é". ($n1 - $n2);
    
?>