<?php
$nome="Funções de manipulação de strings no PHPs";
$nome_maisculo= strtoupper($nome);//Deixa as minusculas em letras maiusculas
echo $nome_maisculo;

$nome="<br>Funções de manipulação de strings no PHPs";
$nome_minusculo= strtolower($nome);//Deixa as maiusculas em letras minusculas
echo $nome_minusculo;

$nome="<br>Funções de manipulação de strings no PHPs";
$parte  = substr($nome, 8);
echo $parte;

$nome="<br>Linha de código";
$parte  = substr($nome, 0, 5);
echo $parte;

$repetido = str_repeat("<br>0", 5);
echo $repetido;

$qtd_char = strlen("<br>Linha de Código");
echo $qtd_char;

$texto = "<br>Olá, mundo.";
$novo_texto = str_replace("<br>mundo", "leitor", $texto);
echo $novo_texto;

$texto = "<br>Bem vindo ao linha de código!";
$pos= strpos($texto,"Código");
echo $pos;
?>