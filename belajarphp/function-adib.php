<html>
<head>
<title>Function Adib</title>
</head>
<body>

<form action="" method="POST">
	<label>Input</label><br><input type="text" name="n" placeholder="isikan kata">
	<input type="submit" value="cek">
</form>

<?php
/*$a = $_POST['n'];
$ft = strtoupper($a);
$uy = "Jumlah katanya ada ";
$ty = str_word_count($a);

echo $ft;
echo "<br>";
echo $uy.$ty;
*/

function bla($n){
echo strtoupper($n);
echo "<br>";
echo "jumlah katanya ";
echo str_word_count($n);
}
bla($_POST['n']);


?>

<br><br>

<form action="" method="POST">
	<label>Input lagi ngapa</label><br><input type="text" name="m" placeholder="masukkan saja">
	<input type="submit" value="tetot">
</form>

<?php

$b = $_POST['m'];

//$e = $r-3;
$y = substr($b, -3);
$z = substr($b, 0, -3);


/*if (for ($r >= 5; $r > $e; $r++) {
	echo "*";
}) {
	echo $y;
} elseif ($r < 5) {
	echo $b.$j;
}

//elseif*/ //(for ($r = 5 ; $r < $u ; $r++){
	//echo "*";
//echo "$b*3";$r >= 5

function oaoe($r,$k,$j,$f,$l) {
if($k < 5){
	echo $r.$j;
} elseif ($k >= 5) {
	for ($x = 1; $x <= $f; $x++) {
		echo "*";
		}
	echo $l;
	}
}
oaoe($b, strlen($b), strrev($b), strlen($z), $y);
?>


<br><br>

<form action="" method="POST">
	<label>Maaf telat</label><br><input type="text" name="y">
	<input type="submit" value="luwe">
</form>
<?php

$h = $_POST['y'];
$sus = substr($h, 0, 3);
$sas = substr($h, 3);

function mumet($fg,$vg) {
	echo $fg;
	echo $vg;
}
mumet(strtoupper ($sus), str_replace(" ","+", $sas));
?>
</body>
</html>
