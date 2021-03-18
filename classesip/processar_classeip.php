<body style="color:black;background-color:gainsboro;">
	<img src="aedah.png" width="100" height="110" align="right">
<center><h1>Classes IP</h1></center>
<br>
<h3>Classe:</h3>
<?php
	$a=$_GET['A'];
	$b=$_GET['B'];
	$c=$_GET['C'];
	$d=$_GET['D'];


	if($a==127){
		echo "Endereço reservado a loopback ou localhost";
		echo "<br>";
		echo "IP Reservado e Invalido";
	}
	elseif($a>=1 && $a<=126 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe A";
	}
	elseif($a>=128 && $a<=191 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe B";
	}
	elseif($a>=192 && $a<=223 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe C";
	}
	elseif($a>=224 && $a<=239 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe D";
	}
	elseif($a>=240 && $a<=254 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe E";
	}
	else{
		echo "Erro! Indique um IP publico entre 0.0.0.0 e 255.255.255.255";
	}


echo "<br>";



	ECHO"<br>";
	echo"<a href='formulario.php'>Voltar</a>";

?>