<?php
$nota1= rand(0,20);
$nota2= rand(0,20);
$nota3= rand(0,20);
$media=round(($nota1+$nota2+$nota3)/3,2);
if($media<8){
		echo '<span style="color:red">Reprovado </span> A média do aluno é: '.$media."<br>";
	}
	elseif($media>8 && $media < 9.5){
		echo '<span style="color:yellow">Recuperação</span> A média do aluno é: '.$media."<br>";
	}
	else{
		echo '<span style="color:green">Aprovado</span> A média do aluno é: '.$media."<br>";
	}

?>