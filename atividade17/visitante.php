<?php
echo "<span style='color:red;'><h3><b>******************************Página Visitante************************</b></h3></span><br>";

session_name('VariaveisNomeIdade');
session_start();

$nome = $_SESSION['NomeAluno'];
$idade = $_SESSION['IdadeAluno'];
echo "<br><br>";
echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";

echo "<a href='formulario.html'><h5><b>Voltar</b></h5>";
echo "<a href='principal.php'><h5><b>Principal</b></h5>";
echo "<a href='principalcom_isset_e_empty.php'><h5><b>Principal (com Isset e Empty)</b></h5></a>";

?>