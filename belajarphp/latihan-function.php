<?php

function sum($x, $y) {
	$z = $x + $y;
	return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo "<br>";

function dif($x, $y) {
	$z = $x - $y;
	return $z;
}
echo "5 - 10 = " . dif(5, 10) . "<br>";
echo "7 - 13 = " . dif(7, 13) . "<br>";
echo "2 - 4 = " . dif(2, 4);

echo "<br>";

function prod($x, $y) {
	$z = $x * $y;
	return $z;
}
echo "5 * 10 = " . prod(5, 10) . "<br>";
echo "7 * 13 = " . prod(7, 13) . "<br>";
echo "2 * 4 = " . prod(2, 4);

echo "<br>";

function div($x, $y) {
	$z = $x / $y;
	return $z;
}
echo "5 / 10 = " . div(5, 10) . "<br>";
echo "7 / 13 = " . div(7, 13) . "<br>";
echo "2 / 4 = " . div(2, 4);

echo "<br>";

function modul($x, $y) {
	$z = $x % $y;
	return $z;
}
echo "5 % 10 = " . modul(5, 10) . "<br>";
echo "7 % 13 = " . modul(7, 13) . "<br>";
echo "2 % 4 = " . modul(2, 4);

echo "<br>";

function pang($x, $y) {
	$z = $x ** $y;
	return $z;
}
echo "5 ** 10 = " . pang(5, 10) . "<br>";
echo "7 ** 13 = " . pang(7, 13) . "<br>";
echo "2 ** 4 = " . pang(2, 4);




?>
