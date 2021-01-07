<?php
if($_POST["operacao"]=="soma"){
    soma();
}elseif($_POST["operacao"]=="media"){
    media();
}
function soma(){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $numero3=$_POST["num3"];
    $numero4=$_POST["num4"];
    $soma= $numero1+$numero2+$numero3+$numero4;
    
    echo "A soma dos números é: ".$soma. "<br>";
}
function media(){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $numero3=$_POST["num3"];
    $numero4=$_POST["num4"];
    $soma= $numero1+$numero2+$numero3+$numero4;
    $media=$soma/4;
    
    echo "A média dos números é: ".$media. "<br>";
}

?>