<html>
<head>
<title></title>
</head>
<body>
<form action="" method="POST">
	<label>eded</label><input type="text" name="y">
	<input type="submit" value="luwe">
</form>
<?php

$h = $_POST['y'];

$gv = explode(" ",$h);

echo implode("+",$gv)."<br>";

?>
</body>
</html>
