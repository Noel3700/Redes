<?php
    $num1 = $_GET["num1"];
    
    $descontos = $num1 * 0.15;
    $cantina = $num1 * 0.10;
    $transporte = $num1 * 0.05;
    $liquido = $num1 - $descontos - $cantina -$transporte;
    echo "Descontos: ".$descontos."<br>";    
    echo "Cantina: ".$cantina."<br>";
    echo "Salário Liquido: ".$liquido."<br>";
    echo "Transporte: ".$transporte;
    
?>