<?php


echo "<p>Bismillaahirrahmanirraahiim</p>";
echo "<p>Program Pengingat Tentang Belanja</p>";

echo "<form>
	<label>Jumlah total belanjaan</label><input type="text" name="jtb">
	<button type="submit">Cek</button>";


if ($bel = 30000) {
	echo "Cepet pulang, keluarga menanti di rumah";
} elseif ($bel < 30000) {
	echo "Sisa, habiskan sekalian";
} elseif ($bel > 30000) {
	echo "Belanjaanmu kebanyakan";
} else {
	echo "kamu belum belanja";
}











?>
