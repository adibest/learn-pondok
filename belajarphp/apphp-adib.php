<?php

$bel = $_POST['jtb'];
$b = 30000;

if ($bel > 0 && $bel < 30000) {
	echo "Sisa ";
	echo $b-$bel;
	echo ", habiskan sekalian";
} elseif ($bel == 30000) {
	echo "Cepet pulang, keluarga menanti di rumah";
} elseif ($bel > 30000) {
	echo "Belanjaanmu kebanyakan";
} else {
	echo "Belanja kok ngemin?";
}
?>
