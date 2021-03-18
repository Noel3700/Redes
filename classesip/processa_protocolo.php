<body style="color:black;background-color:gainsboro;">
	<img src="aedah.png" width="100" height="110" align="right">
	<center><h1>Protocolo</h1></center>
	<br>
<?php 
	
	$protocolo=$_GET['protocolo'];

	if($protocolo=="dns"){
		echo "<h2>DNS [Domain Name System]</h2>";
		echo"Protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácil de ser memorizado pelos utilizadores. 
		Por exemplo, www.portoeditora.pt, poderá,corresponder ao endereço IP 192.16831.32.<br>";
	}
	elseif($protocolo=="ftp"){
		echo "<h2>FTP [File Transfer Protocol]</h2>";
		echo"Protocolo utilizado para a transferência de ficheiros. Serve para fazermos o download ou
			upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://.<br>";
	}
	elseif($protocolo=="http"){
		echo "<h2>HTTP [HyperText Transfer Protocol]</h2>";
		echo"Protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser,
			ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de
			Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente
			receber a página Web correspondente.<br>";
	}
	elseif($protocolo=="ip"){
		echo "<h2>IP [Internet Protocol]</h2>";
		echo"Protocolo responsável por estabelecer a ligação entre os computadores emissor e recetor
			para que a informação não se perca na rede.<br>";
	}

	echo"<br><a href='formulario.php'>Voltar</a>";
?> 