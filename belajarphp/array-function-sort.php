<?php

	$cars = array
	(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Mazda",5,2),
	array("Honda",17,15)
	);
	
	echo $cars[0][1];

	for ($row = 0; $row < 4; $row+=2) {
		echo "<p>Row Number $row</p>";
		echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		 echo "<li>".$cars[$row][$col]."</li>";
		}
		echo "</ul>";
	}

	echo "function sort";
	sort($cars);


?>
