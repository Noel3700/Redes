<?php
$pararLoop=31;
//este for é executado indefínidamente´
for($numero=1; ; $numero++){
	if($numero == $pararLoop){
		//este break obriga a terminar o ciclo for
		break;
	}
	echo $numero."<br>";
}
?>