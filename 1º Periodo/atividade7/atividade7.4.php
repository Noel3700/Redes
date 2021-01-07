<?php
$nota = -1;
switch ($nota) {
	case ($nota<0 || $nota>20):
		print ('Nota Inválida');
		break;
	case ($nota<10):
		print ('Não Aprovado');
		break;
	default:
		print ('Aprovado');
}

?>