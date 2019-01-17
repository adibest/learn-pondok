<?php
	$x = 2004;
	for ($a = $x; $a<2050; $a+=4) {
		echo $a."<br>";
	}

	$program = array(
	array("Bahasa PHP","Anto","Edi","Sita"),
	array("Bahasa Delphi","Anto","Budi"),
	array("Bahasa MySQL","Nana","Alif","Jordan","Rahmat"),
	array("Bahasa C++","Masto","Ruri","Omar"),
	array("Bahasa PERL","Andi")
	);


for ($row=0; $row<5; $row++) {
		echo "<ol>";
for ($col=1; $col<5; $col++) {
	for ($col=0; $col<5; $col++) {
		echo $program[0][0];
	}
		echo "<li>".$program[$row][$col]."</li>";
		}
		echo "</ol>";
	}


	/*$harga = $_POST['harga'];
	$diskon = $_POST['diskon'];

	echo ($harga*(20/100));

	if ($harga > 200000) {
		echo ($harga*(20/100));
	} else {
		echo "anda tak dapat diskon";
	}

	$nilai = $_POST['nilai'];

	if ($nilai >= 90 && $nilai <= 100) {
		echo "Mendapatkan Nilai A";
	} elseif ($nilai >= 70 && $nilai <= 89) {
		echo "Mendapatkan Nilai B";
	} elseif ($nilai >= 50 && $nilai <= 69) {
		echo "Mendapatkan Nilai C";
	} elseif ($nilai >= 30 && $nilai <= 49) {
		echo "Mendapatkan Nilai D";
	} elseif ($nilai >= 0 && $nilai <= 29) {
		echo "Mendapatkan Nilai E";
	}*/
?>
