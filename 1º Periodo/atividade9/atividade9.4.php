<?php
$num1=rand(0,100);
echo $num1;
echo '<br>';
$num2=rand(0,100);
echo $num2;
echo '<br>';
$num3=rand(0,100);
echo $num3;
echo '<br>';
echo'O maior  número é:'. max($num1,$num2,$num3);
echo '<br>';
echo'O menor número é:'. min($num1,$num2,$num3);

echo '<br>';
echo '<br>';

if($num1>$num2 && $num1>$num3){
	echo "Número 1 é  o maior";
}elseif ($num2>$num1 && $num2>$num3) {
	echo "Número 2 é  o maior";
}else
echo "Número 3 é  o maior";
echo '<br>';
echo '<br>';


if($num1<$num2 && $num1<$num3){
	echo "Número 1 é  o menor";
}elseif ($num2<$num1 && $num2<$num3) {
	echo "Número 2 é  o menor";
}else
echo "Número 3 é  o menor";



?>