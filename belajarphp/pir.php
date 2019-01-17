<?php

	$bt = ($_POST['bt']) ;

$input=($_POST['bt']);
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
