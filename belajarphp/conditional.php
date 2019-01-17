<?php

$t = date("H");

if ($t < "10") {
	echo "Esuk ojo turu!";
} elseif  ($t < "15") {
	echo "Oleh turu";
} else {
	echo "Turu o";
}

echo "<br><br>";
$favcol = "red";

switch ($favcol) {
	case "red";
		echo "koe seneng werna abang";
		break;
	case "blue";
		echo "koe seneng werna biru";
		break;
	default:
		echo "koe seneng werna liane";
}

?>
