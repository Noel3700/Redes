<?php
if($_POST["operacao"]=="soma"){
    soma();
}elseif($_POST["operacao"]=="subtracao"){
    subtracao();
}elseif($_POST["operacao"]=="multiplicacao"){
    multiplicacao();
}else{
    divisao();
}
function soma(){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $soma= $numero1+$numero2;
    
    echo "A soma dos números é: ".$soma. "<br>";
}

function subtracao(){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $subtracao=$numero1-$numero2;
    
    echo "A subtracao dos números é: ".$subtracao. "<br>";
}

function multiplicacao(){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $multiplicacao= $numero1*$numero2;
    
    echo "A multiplicacao dos números é: ".$multiplicacao. "<br>";
}

function divisao(){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $divisao= $numero1/$numero2;
    
    echo "A divisao dos números é: ".$divisao. "<br>";
}









?>