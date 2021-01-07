<?php
$nota = 5;
if ($nota<0 || $nota>20) {
	echo 'Valor da nota não é válida';
}
elseif ($nota<10)
{
	echo 'Aluno <span style="color:#ff0000">Reprovado</span> com ' ,$nota. ' valores.';
	echo '<br> Deverá trabalhar mais para alcançar resultados positivos';
}
else {
	echo 'Aluno <span style="color:#00ff00">Aprovado</span> com ' ,$nota. ' valores.';
	echo '<br> Muito bom trabalho';
}

?>