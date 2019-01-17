<?php

echo "=>Indexxed Arrays<br><br>";
$pen=array("Combo", "Standard", "Piccolo", "Snowman", "Greeble", "Faber-Castell");
echo "Waktu SD saya sering pakai bolpen $pen[0] dan $pen[1]<br>";

$jajan[0]="Siomay";
$jajan[1]="Burger";
$jajan[2]="Pizza";
$jajan[3]="Pecel";
$jajan[4]="Gorengan";
echo "Makanan kesukaan saya adalah $jajan[4], $jajan[0], dan $jajan[3]<br>";

$lamp=array("Lampu Neon", "Bolam", "Tintir", "Petromak", "Lampu LED");
echo "Tahun 2005, $lamp[4] masih sulit dijumpai<br><br>";


echo "=>Multidimensional Array<br><br>";
$potlot=array
	(
	array("HB","Tersedia",7),
	array("2B","Tersedia",8),
	array("2H","Habis",9),
	array("4B","Habis",3)
	);

$kelas=array
	(
	array("XA7","Bersih",86),
	array("XA4","Cukup Bersih",77),
	array("XA9","Sangat Bersih",96),
	array("XA1","Cukup Bersih",79),
	array("XA3","Bersih",84)
	);

echo "Multidimensional array adalah semacam program untuk membuat data tersusun rapi. Di mana dalam satu obyek(kolom) memiliki berbagai penjelasan/keterangan diatur sedemikian hingga menjadi tertata. Mirip dengan Microsoft Excel dengan beda ini(multidimensional array) lebih menantang.<br><br>"; 


echo "=>Ini Fungsi for<br><br>";
$jml=count($pen);
echo "Bolpen lejen :<br>";
for($x=0; $x < $jml; $x++){
	echo $pen[$x];
	echo "<br>";
}


sort($kelas);
echo "<br><br>Daftar Nilai Kebersihan Kelas";
for ($row=0; $row<5; $row++) {
		echo "<ul>";
for ($col=0; $col<3; $col++) {
		echo "<li>".$kelas[$row][$col]."</li>";
		}
		echo "</ul>";
	}


krsort($kelas);
echo "<br><br>Daftar Peringkat Kebersihan Kelas";
for ($row=0; $row<5; $row++) {
		echo "<ul>";
for ($col=0; $col<3; $col++) {
		echo "<li>".$kelas[$row][$col]."</li>";
		}
		echo "</ul>";
	}



for ($row=1; $row<4 ; $row+=1) {
		echo "<p>Persediaan pensil :</p>";
		echo "<ul>";
for ($col=0; $col<2 ; $col++) {
		echo "<li>".$potlot[$row][$col]."</li>";
		}		
		echo "</ul>";
} 

?>
