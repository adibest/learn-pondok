<html>
<head>
<title>Aplikasi php sederhana</title>
</head>
<body>
<p>Bismillaahirrahmanirraahiim</p>
<p>Program Pengingat Tentang Belanja</p>


<form action="apl-sed-adib.php" method="POST">
	<label>Jumlah total belanjaan</label><br><input type="text" name="jtb">
	<button type="submit">Cek</button>
</form>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$bel = ($_POST['jtb']);
$b = 30000;

if ($bel > 0 && $bel < 30000) {
	echo "Uangnya masih ";
	echo $b-$bel;
	echo ", habiskan sekalian";
} elseif ($bel == 30000) {
	echo "Cepet pulang, keluarga menanti di rumah";
} elseif ($bel > 30000) {
	echo "Belanjaanmu kebanyakan";
} elseif ($bel <= 0) {
	echo "Kamu belum belanja rek!";
} else {
	echo "Belanja kok ngemin?";
}


?>
<br><br><p>Program Menghitung Harga Setelah Diskon rek!</p>

<form action="apl-sed-adib.php" method="POST">
	<label>Masukkan harga sebelum diskon</label><br><input type="text" name="hsd"><br>
	<label>Masukkan persen diskon</label><br><input type="text" name="pd"><br>
	<button type="submit">Hitung</button>
</form>
<?php

$har = ($_POST['hsd']);
$dis = ($_POST['pd']);

if ($har > 0 && $dis > 0) {
	echo "Harga setelah diskon adalah ";
	echo ($har - ($har*$dis/100));
	echo ", jangan lupa besok belanja lagi";
} elseif ($har = NULL && $dis = NULL) {
	echo NULL;
} elseif ($har < 0 && $dis < 0) {
	echo "Mana ada diskon sama harga minus";
} else {
	echo NULL;
}
?>



</body>
</html>

