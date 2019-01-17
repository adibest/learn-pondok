<?php

$loop = "x";
$tingkat = 7;

for ($x=0; $x < $tingkat*2; $x+=2){
	for ($y=0; $y <= $x ;$y+=2){
		echo $loop.$loop;
	}
		echo "<br>";
}


?>
