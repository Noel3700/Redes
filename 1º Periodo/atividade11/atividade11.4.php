<?php
$a = array('a' =>"maçã",'b'=>"banana");
$b = array('a' =>"kiwi",'b'=>"ananás",'c'=>"morango");
$c= array_merge($a,$b);

foreach ($c as $key => $value) {
	echo $value.'<br>';
}
$c= array_merge($b,$a);
foreach ($c as $key => $value) {
	echo $value.'<br>';
}






?>