<html>
<head>
<title>REview 14 Oktober</title>
</head>
<body>
<form action="" method="POST">
	<label></label><input type="text" name="rev1"><input type="text" name="rev2">
	<input type="submit" value="cuek">
</form>
<?php
	$q = $_POST['rev1'];
	$w = $_POST['rev2'];
	$z = strlen($q);
	$x = strlen($w);
	$p = ($z/2);
	$r = floor($p);	
	$a = substr($q,0,$r);

if ($z == $x) {
	echo $a.$w;
}
elseif ($x < $z) {
	echo strtoupper($q.$w);
}
?>
<form>
	<label></label><input type="text" name="revi">
	<input type="submit" value="cuek">
</form>
<?php

?>
</body>
</html>
