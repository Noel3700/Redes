<?php
$nota= rand(0,20);
$nota= rand(0,5);
$nota= rand(0,10);

if($nota<8){
		echo '<span style="color:red">Reprovado </span> A média do aluno é: '.$nota."<br>";
	}
	elseif($nota>8 && $nota < 9.5){
		echo '<span style="color:yellow">Recuperação</span> A média do aluno é: '.$nota."<br>";
	}
	else{
		echo '<span style="color:green">Aprovado</span> A média do aluno é: '.$nota."<br>";
	}

?>