<?php
for ($i=1; $i < 15 ; $i++) { 
	$numeros=rand(1,1000);
	$vetor1[$i] = $numeros;
}

for ($i=1; $i < 15 ; $i++) { 
	echo "Posição do número:".$vetor1[$i];
	if ($vetor1[$i] % 2 == 0 ) {
		echo " O número é par "."<br>";
	}
	else {
		echo " O número é impar "."<br>";
	}
}
?>




