<?php
function sum($x, $y) {
	$z = $x + $y;
	return $z;
}
function dif($x, $y) {
	$z = $x - $y;
	return $z;
}
function prod($x, $y) {
	$z = $x * $y;
	return $z;
}
function div($x, $y) {
	$z = $x / $y;
	return $z;
}
function modul($x, $y) {
	$z = $x % $y;
	return $z;
}
function pang($x, $y) {
	$z = $x ** $y;
	return $z;
}
echo "5 ** 10 = " . pang(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 * 4 = " . prod(2, 4);

echo "<br><br><br>";

function ls($a, $t) {
	$s = 2;					// $hasil = $a * $t / 2;
	$q = $a * $t / $s;	// return $hasil;
	return $q;
}
echo "Luas segitiga dengan alas 8, tinggi 5 = " . ls(8, 5) . "<br>";
echo "Luas segitiga dengan alas 256, tinggi 340 = " . ls(256, 340) . "<br>";
echo "Luas segitiga dengan alas 9, tinggi 7 = " . ls(9, 7) . "<br>";



?>
