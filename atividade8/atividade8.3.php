<?php
for ($i=1; $i<=20; $i++){
	$nota = rand(1,20);
	switch ($nota) {
		case ($nota<8):
			echo '<span style="color:red">Reprovado </span> A nota do aluno é: '.$nota."<br>";
			break;
		case ($nota>8 && $nota < 9.4):
			echo '<span style="color:yellow">Admitido a exame </span> A nota do aluno é: '.$nota."<br>";
			break;
		default:
			echo '<span style="color:green">Aprovado</span> A nota do aluno é: '.$nota."<br>";
			break;
	}
	
}
?>