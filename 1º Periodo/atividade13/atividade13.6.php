<?php
    $num1 = 20;
    $num2 = 10;
    function percentagem($num1, $num2){
        $total = $num1 + $num2;
        $p1 = ($num1 / $total) * 100;
        return $p1;
    }

    echo 'A percentagem de rapazes é: ' . round(percentagem($num1, $num2)) . '%';
    echo '<br>';
    echo 'A percentagem de raparigas é: ' . round(percentagem($num2, $num1)) . '%';
?> 