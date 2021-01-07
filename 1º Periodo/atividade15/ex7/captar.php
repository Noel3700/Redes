<?php
    $num1 = $_GET["num1"];
    
    if($num1 < 18){
        echo "Você tem ".$num1." anos - É menor de idade.";
    }
    else if($num1 >=18 && $num1 < 100){
        echo "Você tem ".$num1." anos - É maior de idade.";
    }
    else{
        echo "Você é um Dinossauro";
    }
?>