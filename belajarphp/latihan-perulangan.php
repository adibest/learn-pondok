<html>
<head>
<title></title>
</head>
<body>
	<form action="laker.php" method="POST">
		<label>Masuk</label><input type="text" name="st">
		<input type="submit" value="cek"></input>
	</form>
	
<?php
$z = ($_POST['st']);
$a = strlen($z);
if ($a < 6 && $a > 0) {				//if (empty($a)) {
	echo "$z***";							//echo "";
} elseif ($a >= 6) {					//}
	echo "$z-$z-$z";
} else {
 echo "";
}


?>

</body>
</html>
