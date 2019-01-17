<?php
echo "Indexxed Array<br><br>";

$cars = array("BMW", "Honda", "Mazda", "Datsun", "KIA");

$jml = count($cars);

for($x=0; $x<$jml; $x++) {
	echo $cars[$x];
	echo $x."<br><br>";}

echo "Associative Array<br><br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben umure ".$age['Ben ']."saiki<br>";

foreach($age as $x => $x_value) {
	echo  "Key = " . $x . ", Value = " . $x_value;
	echo "<br>";
}


?>
