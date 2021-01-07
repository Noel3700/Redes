<?php
$soma=0;
$produto=1;
for ($i=0; $i < 20 ; $i++) { 
	$numeros=rand(1,10000);
	$vetor1[$i] = $numeros;
	$soma= $soma+$vetor1[$i];
	$produto= $produto * $vetor1[$i];
}
$maior = $vetor1[0];
$menor = $vetor1[0];
for ($i=0; $i < 20 ; $i++) { 
	echo "O número é: ".$vetor1[$i]."<br>";
	if ($vetor1[$i] > $maior ) {
	$maior = $vetor1[$i];
	}
	if ($vetor1[$i] < $menor) {
		$menor = $vetor1[$i];
	}
}
echo "O maior número é: ".$maior."<br>";
echo "O menor número é: ".$menor."<br>";

$media=$soma/20;
echo "A média é: ".$media."<br>";
echo "O produto é:".$produto."<br>";

?>
