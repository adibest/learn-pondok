<?php
$serv = "localhost";
$sql = mysqli_connect($serv, "root", "123", "latihan");

/*if (!$sql) {
	die ("Gak konek");
}*/

echo "<pre>";
var_dump($sql);
echo "</pre>";
?>
