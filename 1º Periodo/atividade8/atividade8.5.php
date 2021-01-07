<?php
echo "Tabuada do 5<br>";
//tabuada do 5
$x=1;
while ($x <= 10){
	$res = $x * 5;
	echo '5 x ' . $x . '=' . $res . '<br>';
	$x++;
}
echo "<br>Tabuada do 9<br>";
//tabuada do 9
$y=1;
do{
	$res = $y * 9;
	echo '9 x ' . $y . '=' . $res . '<br>';
	$y++;
}
while ($y <=10);
?>