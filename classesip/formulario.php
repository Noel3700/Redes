<!DOCTYPE html>
<html>
<head>
<title>Fomulário</title>
</head>
<body style="color:black;background-color:gainsboro;">
	<img src="aedah.png" width="100" height="110" align="right">
	<center><h1>Endereços IP</h1></center>
	
<h2> IP </h2>
<h4><i>Escreva o endereço ip</i></h4>
	<form action="processar_classeip.php">
		<input type="text" name="A">
		<input type="text" name="B">
		<input type="text" name="C">
		<input type="text" name="D">
		<br>
		<br>
		<input type="submit" value="Confirme">
</form>
<br>
<h2>Protocolo</h2>
<h4><i>Selecione o protocolo</i></h4>
<form action="processa_protocolo.php"> 
	<select name="protocolo" id="cars">
		<option value="dns">DNS</option>
		<option value="ftp">FTP</option>
		<option value="http">HTTP</option>
		<option value="ip">IP</option>
	</select>
	<br>
	<br>
	<input type="submit" name="Confirme">
	</form>
</body>
</html> 