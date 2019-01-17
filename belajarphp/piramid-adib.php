<html>
<head>
<title>Piraamid</title>
</head>
<body>

<form action="piramid-adib.php" method="POST">
	<label>Masukkan inputan</label><input type="text" name="bt">
	<input type="submit" value="kirim"></input>
</form>
<?php

$input=(isset($_POST['bt'])?$_POST['bt']:"0");
$loop=3;
	for ($a=0; $a < $loop ; $a++) { 
		for ($b=$loop; $b > $a; $b--) { 
			echo "*"; 
	}
		for ($c=0; $c <= $a; $c++) { 
			echo $input; 
	}
		for ($d=$loop; $d > $a; $d--) { 
			echo "*"; 
	}
	echo "<br>"; 
	 }
							
?>	
</body>
</html>
