<html>
<head>
<title></title>
</head>
<body>
	<form action="" method="POST">
		<label>Input</label><input type="text" name="rev"><input type="text" name="rec">
		<input type="submit" value="cek">
	</form>
<?php
$a = $_POST['rev'];
$b = $_POST['rec'];
$c = $a/2;

echo $a*$b/$c;
?>
	<form action="" method="POST">
		<label>Input</label><input type="text" name="wa"><input type="text" name="we">
		<input type="submit" value="cek">
	</form>
<?php
$ua = $_POST['wa'];
$ub = $_POST['we'];
$uc = ($ua*$ub)+$ub;
$ud = $ua*2;
$ue = ($ua+$uc)*$ud;

echo $ue;
?>

	<form action="" method="POST">
		<label>Input</label><input type="text" name="ya"><input type="text" name="ye">
		<input type="submit" value="cek">
	</form>
<?php
$ca = $_POST['ya'];
$cb = $_POST['ye'];

?>
</body>
</html>
