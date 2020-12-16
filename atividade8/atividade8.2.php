<?php
for ($i=1; $i<=20; $i++){
	$nota = rand(1,20);
	if($nota<8){
		echo '<span style="color:red">Reprovado </span> A nota do aluno é: '.$nota."<br>";
	}
	elseif($nota>8 && $nota < 9.4){
		echo '<span style="color:yellow">Admitido a exame </span> A nota do aluno é: '.$nota."<br>";
	}
	else{
		echo '<span style="color:green">Aprovado</span> A nota do aluno é: '.$nota."<br>";
	}
}
?>