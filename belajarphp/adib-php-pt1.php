<html>
<head>
<title>latihan Adib PHP pt.1</title>
	<style type="text/css">
		body {
			font-family: Ubuntu;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<label>Input </label><input type="text" name="aku" size="50" placeholder="coba masukkan kalimat yang ada kata aku -nya">
		<input type="submit" value="CEK">
	</form>
	<?php
		$a = $_POST['aku'];

		function ai($uba) {
			echo $uba;
		}
		ai(str_replace("aku","saya",$a));
	?>
<br><br>
	<form action="" method="POST">
		<label>Input </label><input type="text" name="agk" placeholder="masukkan angka">
		<input type="submit" value="CEK">
	</form>
	<?php
		
		$z = $_POST['agk'];
		$y = array(0,1,2,3,4,5,6,7,8,9);
		$x = array("zero ","one ","two ","three ","four ","five ","six ","seven ","eight ","nine ");
		function waw($w) {
			echo $w;
		}
		waw(str_replace($y,$x,$z));
		/*function wa($g) {
			echo $g;
		}
		wa(str_replace(0,"nol ","$z "));
		wa(str_replace(1,"satu ","$z "));
		wa(str_replace(2,"dua ","$z "));
		wa(str_replace(3,"tiga ","$z "));
		wa(str_replace(4,"empat ","$z "));
		wa(str_replace(5,"lima ","$z "));
		wa(str_replace(6,"enam ","$z "));
		wa(str_replace(7,"tujuh ","$z "));
		wa(str_replace(8,"delapan ","$z "));
		wa(str_replace(9,"sembilan ","$z "));*/


		/*function wa($g) {
			echo $g;
		}
		wa(str_replace(0,"nol ",$z));

		function wb($h) {
			echo $h;
		}
		wb(str_replace(1,"satu ",$z));

		function wc($i) {
			echo $i;
		}
		wc(str_replace(2,"dua ",$z));

		function wd($j) {
			echo $j;
		}
		wd(str_replace(3,"tiga ",$z));

		function we($k) {
			echo $k;
		}
		we(str_replace(4,"empat ",$z));

		function wf($l) {
			echo $l;
		}
		wf(str_replace(5,"lima ",$z));

		function wg($m) {
			echo $m;
		}
		wg(str_replace(6,"enam ",$z));

		function wh($n) {
			echo $n;
		}
		wh(str_replace(7,"tujuh ",$z));

		function wi($o) {
			echo $o;
		}
		wi(str_replace(8,"delapan ",$z));

		function wj($p) {
			echo $p;
		}
		wj(str_replace(9,"sembilan ",$z));

		*/		
		/*function wa($g) {
			echo $g;
		}
		wa(str_replace(0,"nol ",$z));
		wa(str_replace(1,"satu ",$z));
		wa(str_replace(2,"dua ",$z));
		wa(str_replace(3,"tiga ",$z));
		wa(str_replace(4,"empat ",$z));
		wa(str_replace(5,"lima ",$z));
		wa(str_replace(6,"enam ",$z));
		wa(str_replace(7,"tujuh ",$z));
		wa(str_replace(8,"delapan ",$z));
		wa(str_replace(9,"sembilan ",$z));

		*/

		/*function aq($aba) {
			echo $aba;
		}
		aq(str_replace(1,"satu",$z));*/

		/*function aq($y,$x,$v) {
			echo $v;
		}
		aq(array(0,1,2,3,4,5,6,7,8,9),array(n,s,d,t,e,l,m,a,b),str_replace($y,$x,$z));
		function aq($z) {
			;
		}

		aq(0);
		aq(1);
		aq(2);
		aq(3);
		aq(4);
		aq(5);
		aq(6);
		aq(7);
		aq(8);
		aq(9);

		function aw($abi) {
			;
		}
		aw(nol);
		aw(satu);
		aw(dua);
		aw(tiga);
		aw(empat);
		aw(lima);
		aw(enam);
		aw(tujuh);
		aw(delapan);
		aw(sembilan);

		function ag($az) {
			echo $az;
		}
		ag(str_replace($z,$abi,$z));*/
	?>
</body>
</html>
