<html>
<head>
	<title>Perulangan Foreach dalam php</title>
</head>
<body>
<h1>Function Foreach</h1>

<p>List Makanan Buat Buka Puasa</p>

<?php
$ifthar = array('Kurma','Air Putih','Teh','Kacang Almond');

foreach ($ifthar as $yeybuka) {
	echo $yeybuka;
	echo "<br>";
}

?>

</body>
</html>
