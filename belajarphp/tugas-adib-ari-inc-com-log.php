<?php

$a=14;
$b=21;
$c=13;
$d=3;
$k=4;
$l=5;
$m=6;
$n=8;
$o=10;

echo "Arithmetic Operators";
echo "<br><br>";
echo $a+$c;
echo "<br>";
echo $b%$a;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $c-$a/$b;
echo "<br><br>";
echo "Increment/Decrement Operators";
echo "<br><br>";
echo $d++;
echo "<br>";
echo $d;
echo "<br>";
echo --$k;
echo "<br>";
echo $k--;
echo "<br>";
echo $k;
echo "<br>";
echo ++$o;
echo "<br><br>";
echo "Comparison Operators";
echo "<br><br>";
echo var_dump($n<$d);
echo "<br>";
echo var_dump($o!==$a);
echo "<br>";
echo var_dump($c==$m);
echo "<br>";
echo var_dump($k===$n);
echo "<br><br>";
echo "Logical Operators";
echo "<br><br>";
if ($d>23 || $o!=$m) {echo "Hai anak kecil<br>";}
if ($a<=$c xor $k==="4") {echo "Yaa Ghulaam<br>";}
if ($l!==8 && $n>=8) {echo "Tomooo<br>";}
if ($b>7 or $m<9) {echo "Gagagagaga<br>";}

?>
