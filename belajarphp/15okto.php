<html>
<head>
<title>Web Pro 15 Oktober 2018</title>
</head>
<body>
	<form action="" method="POST">
		<label>Masukkan harga barang pak Eko </label><input type="text" name="hrg">
		<input type="submit" value="hitung diskon">
	</form>
	<?php
		$harga = $_POST['hrg'];
		$dis1 = 30/100*$harga;
		$dis2 = 50/100*$harga;
		$hasdis1 = $harga-$dis1;
		$hasdis2 = $harga-$dis2;

		if ($harga >= 100000 && $harga < 200000) {
			echo "anda dapat potongan diskon sebesar ".$dis1."<br>";
			echo "harga setelah diskon ".$hasdis1;
		} elseif ($harga >= 200000 && $harga < 500000) {
			echo "anda dapat potongan diskon sebesar ".$dis2."<br>";
			echo "harga setelah diskon ".$hasdis2;
		} else {
			echo $harga;
		}
	?>
	<form action="" method="POST">
		<label>Akan muncul perulangan input sebanyak jumlah huruf </label><input type="text" name="zxc">
		<input type="submit" value="klik saja">
	</form>
	<?php
		$a = $_POST['zxc'];
		$b = strlen($a);
		
		for ($x = 0; $x < $b; $x++) {
			echo $a;
		}
	?>
	<form action="" method="POST">
		<label>Piramid </label><input type="text" name="btg" placeholder="masukkan sembarang"><input type="text" name="ppr" placeholder="masukkan angka">
		<input type="submit" value="cek">
	</form>
	<?php
		$i = $_POST['btg'];
		$p = $_POST['ppr'];

		for ($v = 0;$v < $p  ;$v++) {
			for ($n = $p;$n > $v ;$n--) {
				echo $i." ";
			}echo "<br>";
		}
	?>
	<form action="" method="POST">
		<label>Muncul ganjil </label><input type="text" name="gjl" placeholder="masukkan angka">
		<input type="submit" value="sampun sayah">
	</form>
	<?php
//input : 6 => 5 3 1
		$o = $_POST['gjl'];

		function ganjil($o) {
			for($cx = 0; $o > $cx; $o--)
			{
				if($o%2 != 0) {
				//if(($o+1)%2 == 0) {
					echo $o." ";
				}
			}
		}
		ganjil($o)
		/*do {
			echo "$o ";
			$o-=2;
		} while ($o >= 1);*/
	?>
	<form action="" method="POST">
		<label>Muncul genap </label><input type="text" name="gnp" placeholder="masukkan angka">
		<input type="submit" value="luwee">
	</form>
	<?php
//input : 9 => 8 6 4 2
		$vf = $_POST['gnp'];

		function genap($vf) {
			for($xc = 1; $vf > $xc; $vf--)
			{
				//kuncine nang kene
				if($vf%2 == 0){
					echo $vf." ";
				}
			}
		}
		genap($vf);
	?>
	<form action="" method="POST">
		<label></label><input type="text" name="ak1" placeholder="masukkan angka"><input type="text" name="ak2" placeholder="masukkan angka">
		<input type="submit" value="saigono">
	</form>
	<?php
// input awal dan akhir kmudian munculkan 3 angka sembarang, 2 ganjil, 1 genap rand(),
		$ag1 = $_POST['ak1'];
		$ag2 = $_POST['ak2'];
		

		function mas($ags, $agd, $agf) {
			if ($ags%2 == 0 && $agd%2 != 0 && $agf%2 !=0) {
				echo $ags." ".$agd." ".$agf;
			} elseif ($ags%2 != 0 && $agd%2 != 0 && $agf%2 == 0) {
				echo $ags." ".$agd." ".$agf;
			} elseif ($ags%2 == 0 && $agd%2 == 0 && $agf%2 !=0) {
				echo $ags." ".$agd." ".$agf;
			} else {
				echo "coba refresh lagi";
			}
		}
		mas((rand($ag1,$ag2)), (rand($ag1,$ag2)), (rand($ag1,$ag2)));

		/*function mis($agd) {
			if ($agd%2 != 0) {
				echo $agd;
			} elseif ($agd%2 == 0)
				echo $agd;				
			}
		}
		mis(rand($ag1,$ag2));

		function mes($agf) {
			if ($agf%2 == 0) {
				echo $agf;
			} elseif ($agf%2 != 0)
				echo $agf;
			}
		}
		mes(rand($ag1,$ag2));*/
	?>
</body>
</html>
